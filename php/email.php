<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if( isset($_POST['post-email']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    $mail = new PHPMailer(true);
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'matias2000fernando@gmail.com';                     //SMTP username
        $mail->Password   = 'blyaxrufwetcufmf';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($mail->Username, 'Correo de portafolio');
        $mail->addAddress('matias2000programacion@gmail.com');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Comentario desde portafolio';
        $mail->Body    = 'Nombre: <b>'.$name.'</b><br>
                          Correo: <b>'.$email.'</b><br>
                          Comentario: <b>'.$comment.'</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo json_encode('success');

    } catch (Exception $e) {
        echo json_encode('error');
        // echo json_encode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

?>