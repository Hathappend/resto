<?php

require __DIR__ . "/../Helpers/view.php";
require __DIR__ . "/../Helpers/file.php";
require __DIR__ . "/../Helpers/image.php";
require __DIR__ . "/../Models/User.php";
require __DIR__ . '/../Request/userRequest.php';

function home(): void
{

    $role = array_values(getAuth()->getRoles())[0];
    if ($role == "REVIEWER") {
        $role = "Pelayan";
    }elseif ($role == "COORDINATOR"){
        $role = "Koki";
    }elseif ($role == "MODERATOR"){
        $role = "Kasir";
    }else{
        $role = "Manager";
    }

    view("Profile/index", [
        "title" => "Profile",
        'role' => $role,
        'fetchAll' => findById(getAuth()->id())
    ]);
}

/**
 * @throws \League\Flysystem\FilesystemException
 */
function profileUpdate(): void{

    if (getCsrf()->validate('csrf_token')) {
        $find = findById(getAuth()->id())[0];

        $request = [
            "first_name" => $_POST['first_name'],
            "last_name" => $_POST['last_name'] ?? null,
            "address" => $_POST['address'],
            "address2" => $_POST['address2'] ?? null,
            "city" => $_POST['city'],
            "state" => $_POST['state'],
            "zip" => $_POST['zip'] ,
            "profile_img" => $_FILES['profile_img']['tmp_name'] ?? null,
            "id" => getAuth()->id(),
        ];

//        if ($find == $request) {
//            header('Location: /as');
//            flash('error', "Anda Tidak Mengubah Apapun");
//            exit();
//        }

        $validated = userRequest($request);
        if ($validated) {

            if (empty($request['profile_img'])) {

                $result = update($request, $find['profile_img']);

            }else{
                $imgName = uniqid() . '_' . basename($_FILES['profile_img']['name']);

                $path = "/uploads/profile/{$imgName}";

                $image = image()->read($request['profile_img']);

                $image->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $fileContent = $image->encodeByExtension('jpg');

                filesystem()->write($path, $fileContent);

                $result = update($request, $imgName);
            }

            if ($result) {
                header('Location: /profile');
                flash('success', "Profile berhasil di Perbaharui");
                exit();
            }

            header('Location: /profile');
            flash('error', "Error Tak Terduga");

        } else {

            header('Location: /profile');

        }
    }else{
        header('Location: /error');
    }

}
