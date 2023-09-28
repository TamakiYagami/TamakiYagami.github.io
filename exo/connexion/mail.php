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

/**
 * Fonction envoie de mail
 * @param string $email
 * @param string $msg
 * @param string $objet
 * @param string $name
 * @return void
 */
function SendEmail($email, $msg, $objet, $name) {
    $from = 'dwwm.auboue@hotmail.com';

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
    $mail->FromName = $name;
    $mail->Sender = $from;
    $mail->addReplyTo($from, $name);
    $mail->CharSet = 'utf-8';
    $mail->Subject = $objet;
    $mail->Body = $msg;
    $mail->addAddress($email);

    if (!$mail->Send()) {
        echo "Le mail ne c'est pas envoyé ressayer plus tard";
    } else {
        echo "Le mail c'est envoyé avec succés";
    }
}
