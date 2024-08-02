<?php

require __DIR__ . '/../Helpers/view.php';

function show(): void{

    view("Auth/login", [
        "title" => "Halaman Login"
    ]);

}

function login(): void{

    if (getCsrf()->validate('my-form')) {

        try {
            getAuth()->login($_POST['email'], $_POST['password']);

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
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        } catch (\Delight\Auth\AttemptCancelledException $e) {

        } catch (\Delight\Auth\AuthError $e) {
            die($e->getMessage());
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

        try {
            getAuth()->forgotPassword($_POST['email'], function ($selector, $token) {
                $toEmail = $_POST['email'];
                sendPasswordResetEmail($toEmail, $selector, $token);
            }, 300);

            flash('success', 'Permintaan telah dikirim, cek email ');
            header('Location: /forgot-password');
            exit();
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            flash('error', 'Email Tidak Valid ');
            header('Location: /forgot-password');
            die();
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            flash('error', 'Email Belum di Verifikasi ');
            header('Location: /forgot-password');
            die();
        }
        catch (\Delight\Auth\ResetDisabledException $e) {
            flash('error', 'Reset Password Disable');
            header('Location: /forgot-password');
            die();
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            flash('error', 'Terlalu Banyak Permintaan');
            header('Location: /forgot-password');
            die();
        } catch (\Delight\Auth\AuthError $e) {
            die($e->getMessage());
        }
    }else{
        echo "invalid action";
    }
}

function resetPassword(): void{

    try {
        getAuth()->canResetPasswordOrThrow($_GET['selector'], $_GET['token']);

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

        try {
            getAuth()->resetPasswordAndSignIn($_POST['selector'], $_POST['token'], $_POST['new_password']);

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
            flash('error', 'Password Tidak Valid');
            die('Invalid password');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            flash('error', 'Terlalu Banyak Permintaan');
            die();
        } catch (\Delight\Auth\AuthError $e) {
            die($e->getMessage());
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
