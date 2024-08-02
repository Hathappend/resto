<?php

require __DIR__ . '/../Helpers/view.php';

function show(): void{

    view("Auth/login", [
        "title" => "Halaman Login"
    ]);

}

function login(): void{

//    session_start();

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
        echo "<script>window.location.href = '/koki'</script>";
    }

}
