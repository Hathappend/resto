<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendPasswordResetEmail($toEmail, $selector, $token): bool {
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

        // Content
        $mail->isHTML(true);                                      // Set email format to HTML
        $mail->Subject = 'Password Reset Request';
        $mail->Body    = 'Click <a href="http://pak-resto.test/reset-password?selector=' . urlencode($selector) . '&token=' . urlencode($token) . '">here</a> to reset your password.';
        $mail->AltBody = 'Click the following link to reset your password: https://yourapp.com/reset-password?selector=' . urlencode($selector) . '&token=' . urlencode($token);

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false; // Or handle error accordingly
    }
}