<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'path/to/PHPMailerAutoload.php';

// 创建PHPMailer实例
$mail = new PHPMailer();

// 配置SMTP服务器设置
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@example.com';
$mail->Password = 'your-email-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// 设置发件人和收件人
$mail->setFrom('sender@example.com', 'Sender Name');
$mail->addAddress('recipient@example.com', 'Recipient Name');

// 设置邮件主题和内容
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email.';

// 发送邮件
if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
}
?>
</body>
</html>