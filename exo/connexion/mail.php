<?php

require "./PHPMailer/PHPMailerAutoload.php";
/** 
 * Cette fonction créer un token unique
 * @param int $length
 * @return string
 */
function GenerateToken($length) { // 10
    $token = "_0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($token, $length)), 0, $length);
}

function SendEmail($id, $token, $email, $msg, $objet, $name) {
    function smtpmailer($to, $from, $from_name, $subject, $body) {
        $mail = new PHPMailer();        

        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp-mail.outlook.com';
        $mail->Port = 587;   
        $mail->SMTPSecure = 'tls';    

        $mail->Username = $from;
        $mail->Password = 'DWWMauboue';

        $mail->isHTML();
        $mail->From = $from;
        $mail->FromName = $from_name;
        $mail->Sender = $from;
        $mail->addReplyTo($from, $from_name);
        $mail->CharSet = 'utf-8';
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->addAddress($to);

        if (!$mail->Send()) {
            echo "Le mail ne c'est pas envoyé ressayer plus tard";
        } else {
            echo "Le mail c'est envoyé avec succés";
        }

    }
    // $msg = "Lien pour réinitialiser votre mot de passe : http://localhost/cours_php/TamakiYagami.github.io/exo/connexion/reset.php?id=$id&token=$token";  
    smtpmailer($email, 'dwwm.auboue@hotmail.com', $name, $objet, $msg);                               
}
