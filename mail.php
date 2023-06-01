<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create a new PHPMailer instance
$mail = new PHPMailer(true);
$mail1 = new PHPMailer(true);
try{

    $mail->CharSet = "utf-8";
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->isHTML(true);
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 465;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'ssl';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "sa7thtest@gmail.com";

    //Password to use for SMTP authentication
    $mail->Password = "lkwvzaozsgikptnq";

    //Set who the message is to be sent from
    $mail->setFrom('sa7thtest@gmail.com', '輔大2手書交易平台');

    //Set an alternative reply-to address
    $mail->addReplyTo('sa7thtest@gmail.com', '輔大2手書交易平台');
}
catch(Exception $e){
    echo "Mailer Error: " . $mail->ErrorInfo;
}

