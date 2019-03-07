<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 3/7/2019
 * Time: 9:20 PM
 */

    $to = 'guus@goodbytes.nl';
    $firstname = $_POST["name"];
    $email= $_POST["email"];
    $message= $_POST["message"];
    $subject= $_POST["subject"];



    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if (@mail($to, $subject, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

