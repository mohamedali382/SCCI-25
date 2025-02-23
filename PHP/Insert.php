<?php 
include('connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mail/src/Exception.php';
require '../mail/src/PHPMailer.php';
require '../mail/src/SMTP.php';

if (isset($_SESSION['UserId'])) {
    $UserId = $_SESSION['UserId'];
}

if (isset($_POST['submit'])) {
    $UserId = 1;
    $UserName = $_POST['UserName'];
    $UserWorkshop = $_POST['UserWorkshop'];
    $UserEmail = $_POST['UserEmail'];
    $Message = $_POST['Message'];

    $insert = "INSERT INTO `contact` (`Id`, `UserId`, `UserName`, `UserWorkshop`, `UserEmail`, `Message`) 
                VALUES (NULL, $UserId, '$UserName', '$UserWorkshop', '$UserEmail', '$Message')";

    $run_insert = mysqli_query($connect, $insert);

    if ($run_insert) {
        $mail = new PHPMailer(true);
        
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'yousefa2566@gmail.com'; 
            $mail->Password   = 'wjwg ffxf mogh qckl'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom($UserEmail, $UserName); 
            $mail->addAddress('yousefa2566@gmail.com'); 
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "<p><b>Name:</b> $UserName</p>
                              <p><b>Email:</b> $UserEmail</p>
                              <p><b>Workshop:</b> $UserWorkshop</p>
                              <p><b>Message:</b></p>
                              <blockquote>$Message</blockquote>";

            $mail->send();
            $message = 'Your message has been submitted successfully. A confirmation email has been sent.';
        } catch (Exception $e) {
            $message = "Your message was submitted, but the email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $message = 'Failed to submit your message.';
    }
}
?>
