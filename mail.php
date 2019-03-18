<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 3/7/2019
 * Time: 9:20 PM
 */

    $to = 'guus@goodbytes.nl';
    //$to = 'antdepadoue@gmail.com';
    $firstname = $_POST["name"];
    $email= strip_tags($_POST["email"]);
    $message= $_POST["message"];
    $subject= $_POST["subject"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'X-MSMail-Priority: Normal' . "\r\n";
    $headers .= 'X-Priority: 3' . "\r\n";

    if (@mail($to, $subject, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

