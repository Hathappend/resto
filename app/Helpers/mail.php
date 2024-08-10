<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail(?string $toEmail, string $useFor, ?string $selector = null, ?string $token = null, ?array $user = []): bool {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                           // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                  // Enable SMTP authentication
        $mail->Username   = 'hathappend@gmail.com';              // SMTP username
        $mail->Password   = 'bzzrelhcuktmoeeh';                 // SMTP password
        $mail->SMTPSecure = 'ssl';          // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 465;                                   // TCP port to connect to

        //Recipients
        $mail->setFrom('hathappend@gmail.com', 'Pak Resto');
        $mail->addAddress($toEmail);                               // Add a recipient

        $mail->isHTML(true);
        if ($useFor == 'reset') {
            $mail->Subject = 'Password Reset Request';
            $mail->Body = '
                <!DOCTYPE html>
                <html lang="id">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Reset Kata Sandi</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            margin: 0;
                            padding: 0;
                        }
                        .email-container {
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #ffffff;
                            padding: 20px;
                            border-radius: 8px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }
                        .header {
                            text-align: center;
                            padding: 10px 0;
                        }
                        .header img {
                            max-width: 100px;
                        }
                        .content {
                            margin-top: 20px;
                            color: #333333;
                            line-height: 1.6;
                        }
                        .content p {
                            margin: 10px 0;
                        }
                        .btn-reset {
                            display: inline-block;
                            background-color: #007bff;
                            color: #ffffff;
                            padding: 10px 20px;
                            margin: 20px 0;
                            text-decoration: none;
                            border-radius: 5px;
                        }
                        .footer {
                            text-align: center;
                            margin-top: 30px;
                            color: #777777;
                            font-size: 12px;
                        }
                    </style>
                </head>
                <body>
                    <div class="email-container">
                        <div class="header">
                            <h1>U-Resto</h1>
                        </div>
                        <div class="content">
                            <p>Halo '. $user["first_name"] .' '. $user["last_name"]  .',</p>
                            <p>Kami menerima permintaan untuk mereset kata sandi akun Anda di U-Resto. Jika Anda tidak melakukan permintaan ini, abaikan saja email ini.</p>
                            <p>Untuk mereset kata sandi Anda, silakan klik tombol di bawah ini:</p>
                            <p style="text-align: center;">
                                <a href="http://pak-resto.test/reset-password?selector=' . urlencode($selector) . '&token=' . urlencode($token) . '" class="btn-reset">Reset Kata Sandi</a>
                            </p>
                            <p>Jika tombol di atas tidak berfungsi, salin dan tempelkan URL berikut ke browser Anda:</p>
                            <p>http://pak-resto.test/reset-password?selector=' . urlencode($selector) . '&token=' . urlencode($token) . '</p>
                            <p>Link ini akan kedaluwarsa dalam 5 menit. Pastikan Anda mereset kata sandi sebelum waktu tersebut habis.</p>
                            <p>Jika Anda memiliki pertanyaan atau memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi tim dukungan Kami [hathappend@gmail.com].</p>
                            <p>Atas perhatiannya Kami ucapkan terimakasih.</p>
                        </div>
                        <div class="footer">
                            <p>&copy; ' . date("Y") . ' U-Resto. All rights reserved.</p>
                        </div>
                    </div>
                </body>
                </html>
                ';

            $mail->AltBody = 'Halo '. $user["first_name"] .' '. $user["last_name"]  .',\n\nKami menerima permintaan untuk mereset kata sandi akun Anda di U-Resto. Jika Anda tidak melakukan permintaan ini, abaikan saja email ini.\n\nUntuk mereset kata sandi Anda, silakan klik link berikut:\n\nhttp://pak-resto.test/reset-password?selector=' . urlencode($selector) . '&token=' . urlencode($token) . '\n\nLink ini akan kedaluwarsa dalam 5 menit. Pastikan Anda mereset kata sandi sebelum waktu tersebut habis.\n\nAtas perhatiannya Kami ucapkan terimakasih.\n\[hathappend@gmail.com]\n\n© ' . date("Y") . ' U-Resto. All rights reserved.';
        } elseif($useFor == 'info'){
            $mail->Subject = 'Info Kredensial Akun Anda';
            $mail->Body = '
                <!DOCTYPE html>
                <html lang="id">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Informasi Login</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            margin: 0;
                            padding: 0;
                        }
                        .email-container {
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #ffffff;
                            padding: 20px;
                            border-radius: 8px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }
                        .header {
                            text-align: center;
                            padding: 10px 0;
                        }
                        .header img {
                            max-width: 100px;
                        }
                        .content {
                            margin-top: 20px;
                            color: #333333;
                            line-height: 1.6;
                        }
                        .content p {
                            margin: 10px 0;
                        }
                        .login-info {
                            background-color: #f9f9f9;
                            padding: 15px;
                            border-radius: 5px;
                            margin-top: 20px;
                            border: 1px solid #dddddd;
                        }
                        .footer {
                            text-align: center;
                            margin-top: 30px;
                            color: #777777;
                            font-size: 12px;
                        }
                    </style>
                </head>
                <body>
                    <div class="email-container">
                        <div class="header">
                            <h1>U-Resto</h1>
                        </div>
                        <div class="content">
                            <p>Halo '. $user["first_name"] .' '. $user["last_name"]  .',</p>
                            <p>Anda telah terdaftar di U-Resto sebagai'. $user['role_name'] .'. Berikut adalah informasi login Anda:</p>
                            <div class="login-info">
                                <p><strong>Email:</strong> ' . htmlspecialchars($user['email']) . '</p>
                                <p><strong>Password:</strong> ' . htmlspecialchars($user['password']) . '</p>
                            </div>
                            <p>Anda dapat menggunakan kredensial ini untuk masuk ke sitem Kami. Jangan lupa untuk mengganti kata sandi setelah login untuk alasan keamanan.</p>
                            <p>Jika Anda memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi tim dukungan kami di [hathappend@gmail.com].</p>
                            <p>Terima kasih,<br>U-Resto</p>
                        </div>
                        <div class="footer">
                            <p>&copy; ' . date("Y") . ' U-Resto. All rights reserved.</p>
                        </div>
                    </div>
                </body>
                </html>
                ';

        $mail->AltBody = 'Halo '. $user["first_name"] .' '. $user["last_name"]  .',\n\nAnda telah terdaftar di U-Resto sebagai'. $user['role_name'] .'. Berikut adalah informasi login Anda:\n\nEmail: ' . $data['email'] . '\nPassword: ' . $data['password'] . '\n\nAnda dapat menggunakan kredensial ini untuk masuk ke sitem Kami. Jangan lupa untuk mengganti kata sandi setelah login untuk alasan keamanan.\n\nTerima kasih,\nU-Resto';
        }

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false; // Or handle error accordingly
    }
}