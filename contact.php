<?php
// Replace these values with your own
$to_email = "recipient@example.com"; // The email address to send the email to
$from_email = "sender@example.com"; // Your email address
$subject = "Test Email"; // The email subject
$message = "This is a test email"; // The email message

// GoDaddy SMTP settings
$smtp_host = "smtpout.secureserver.net"; // The SMTP server name
$smtp_port = "465"; // The SMTP port number
$smtp_username = "sender@example.com"; // Your GoDaddy email address
$smtp_password = "your-godaddy-email-password"; // Your GoDaddy email password

// Create the PHPMailer object
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration
$mail->isSMTP();
$mail->Host = $smtp_host;
$mail->SMTPAuth = true;
$mail->Username = $smtp_username;
$mail->Password = $smtp_password;
$mail->SMTPSecure = 'ssl';
$mail->Port = $smtp_port;

// Email content
$mail->isHTML(true);
$mail->setFrom($from_email);
$mail->addAddress();
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
