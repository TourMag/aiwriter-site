<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.qq.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'atours@qq.com';
        $mail->Password   = '22698542';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('atours@qq.com', 'AI创作官网');
        $mail->addAddress('ouym@hotmail.com');

        $mail->isHTML(true);
        $mail->Subject = '新留言来自 ' . $name;
        $mail->Body    = '邮箱: ' . $email . '<br>内容: ' . nl2br($message);

        $mail->send();
        echo '邮件已发送成功';
    } catch (Exception $e) {
        echo '邮件发送失败: ', $mail->ErrorInfo;
    }
}
?>