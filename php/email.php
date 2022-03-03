<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if (isset($_POST['post-email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $mail = new PHPMailer(true);
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'matias2000fernando@gmail.com';
        $mail->Password   = 'blyaxrufwetcufmf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom($mail->Username, 'Correo de portafolio');
        $mail->addAddress('matias2000programacion@gmail.com');
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Comentario desde portafolio';
        $mail->Body    = 'Nombre: <b>' . $name . '</b><br>
                          Correo: <b>' . $email . '</b><br>
                          Comentario: <b>' . $comment . '</b>';

        $mail->send();
        echo json_encode('success');
    } catch (Exception $e) {
        echo json_encode('error');
    }
}
