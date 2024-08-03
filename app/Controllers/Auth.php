<?php

require __DIR__ . '/../Helpers/view.php';
require __DIR__ . '/../Request/userRequest.php';

function show(): void{

    view("Auth/login", [
        "title" => "Halaman Login"
    ]);

}

function login(): void{

    if (getCsrf()->validate('csrf_token')) {

        $request = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $validated = userRequest($request);

        if ($validated) {

            try {
                getAuth()->login($request['email'], $request['password']);

                if (getAuth()->hasRole(\Project\PakResto\Models\Role::MANAGER)) {

                    header('Location: /manager');
                }

                if (getAuth()->hasRole(\Project\PakResto\Models\Role::WAITER)) {

                    header('Location: /pelayan');
                }

                if (getAuth()->hasRole(\Project\PakResto\Models\Role::CHEF)) {

                    header('Location: /koki');
                }

                if (getAuth()->hasRole(\Project\PakResto\Models\Role::CASHIER)) {

                    header('Location: /kasir');
                }
            }
            catch (\Delight\Auth\InvalidPasswordException $e) {
                header('Location: /login');
                flash('errors', ['password' => 'Password Tidak Valid']);
                die();
            }
            catch (\Delight\Auth\EmailNotVerifiedException $e) {
                header('Location: /login');
                flash('error',  'Email not verified');
                die();
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
                header('Location: /login');
                flash('error', 'Terlalu Banyak Request');
                die();
            } catch (\Delight\Auth\AttemptCancelledException $e) {

            } catch (\Delight\Auth\AuthError $e) {
                header('Location: /login');
                flash('error',  'Sistem Bermasalah');
                die();
            }
        }else{
            header('Location: /login');
            flash('error',  'Invalid Login');
            die();
        }

    }else{
        echo "invalid login";
    }
}

function forgotPassword(): void{

    view("Auth/forgot_password", [
        "title" => "Forgot Password"
    ]);

}

function postForgotPassword(): void{

    if (getCsrf()->validate('csrf_token')) {

        $request = [
            'email' => $_POST['email']
        ];

        $validated = userRequest($request);

        if ($validated) {

            try {
                getAuth()->forgotPassword($request['email'], function ($selector, $token) use ($request) {
                    $toEmail = $_POST['email'];
                    sendPasswordResetEmail($toEmail, $selector, $token);
                }, 3600);

                header('Location: /forgot-password');
                flash('success', 'Permintaan telah dikirim, cek email ');

            }
            catch (\Delight\Auth\InvalidEmailException $e) {
                header('Location: /forgot-password');
                flash('errors', ['email' => 'Email Tidak Valid ']);
                die();
            }
            catch (\Delight\Auth\EmailNotVerifiedException $e) {
                header('Location: /forgot-password');
                flash('error', 'Email Belum di Verifikasi ');
                die();
            }
            catch (\Delight\Auth\ResetDisabledException $e) {
                header('Location: /forgot-password');
                flash('error', 'Reset Password Disable');
                die();
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
                header('Location: /forgot-password');
                flash('error', 'Terlalu Banyak Permintaan');
                die();
            } catch (\Delight\Auth\AuthError $e) {
                header('Location: /forgot-password1');
                die();
            }

        }else{
            header('Location: /forgot-password');
        }

    }else{
        echo "invalid action";
    }
}

function resetPassword(): void{

    try {
        getAuth()->canResetPasswordOrThrow($_GET['selector'] ?? '', $_GET['token'] ?? '');

        view("Auth/reset_password", [
            "title" => "Reset Password"
        ]);
    }
    catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
        die('Invalid token');
    }
    catch (\Delight\Auth\TokenExpiredException $e) {
        die('Token expired');
    }
    catch (\Delight\Auth\ResetDisabledException $e) {
        die('Password reset is disabled');
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
        die('Too many requests');
    } catch (\Delight\Auth\AuthError $e) {
        die($e->getMessage());
    }
}

function postResetPassword(): void{

    if (getCsrf()->validate('csrf_token')) {

        $request = [
            'password' => $_POST['password']
        ];

        $validated = userRequest($request);

        if ($validated) {

            try {
                getAuth()->resetPasswordAndSignIn($_POST['selector'], $_POST['token'], $_POST['password']);

                flash('success', 'Password berhasil di reset');
                header('Location: /login');
                exit();
            }
            catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
                flash('error', 'Token Tidak Valid');
                die();
            }
            catch (\Delight\Auth\TokenExpiredException $e) {
                flash('error', 'Token Kadaluarsa');
                die();
            }
            catch (\Delight\Auth\ResetDisabledException $e) {
                flash('error', 'Reset Password Disable');
                die();
            }
            catch (\Delight\Auth\InvalidPasswordException $e) {
                header("Location: /reset-password?selector={$_POST['selector']}&token={$_POST['token']}");
                flash('errors', ['password' => 'Password Tidak Valid ']);
                die();
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
                flash('error', 'Terlalu Banyak Permintaan');
                die();
            } catch (\Delight\Auth\AuthError $e) {
                die($e->getMessage());
            }

        }else{
            header("Location: /reset-password?selector={$_POST['selector']}&token={$_POST['token']}");
        }

    }
}

function changePassword(): void{

    view("Auth/change_password", [
        "title" => "Change Password"
    ]);

}

function postChangePassword(): void{

    if (getCsrf()->validate('csrf_token')) {

        $request = [
            'old_password' => $_POST['old_password'],
            'password' => $_POST['password']
        ];

        $validated = userRequest($request);

        if ($validated) {

            try {
                getAuth()->changePassword($request['old_password'], $request['password']);

                flash('success', 'Password berhasil di reset');
                header('Location: /profile');
                exit();
            }
            catch (\Delight\Auth\NotLoggedInException $e) {
                flash('error', 'Belum Login');
                die();
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
                flash('error', 'Terlalu Banyak Permintaan');
                die();
            } catch (\Delight\Auth\AuthError $e) {
                die($e->getMessage());
            } catch (\Delight\Auth\InvalidPasswordException $e) {
                flash('error', 'Password Tidak Sesuai');
                header('Location: /change-password');
            }

        }else{
            header("Location: /change-password");
        }

    }
}


/**
 * @throws \Delight\Auth\AuthError
 */
function logout(): void {
    getAuth()->logOut();
    getAuth()->destroySession();

//    echo "<script>window.location.href = '/login'</script>"
    header('Location: /login');
}
