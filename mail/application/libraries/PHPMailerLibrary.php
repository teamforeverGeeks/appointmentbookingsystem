<?php

use PHPMailer\PHPMailer\PHPMailer;


class PHPMailerLibrary {

    public function __construct() {
        
    }

    public function load() {
        //PHPMailer
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = ""; //host name
        $mail->SMTPAuth = TRUE;
        $mail->isHTML(TRUE);
        $mail->Username = "";   //put your smtp username
        $mail->Password = "";  // your smtp password
        $mail->Port = 587;
        $mail->CharSet="utf-8";
        $mail->From = "";   // from email you can replace 
        $mail->FromName = "Rathorji";  // from name may be your company 
        return $mail;
    }

}
