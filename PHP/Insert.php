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

            // Send to Admin
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

            // Send Confirmation to User
            $mail->clearAddresses(); 
            $mail->addAddress($UserEmail, $UserName); 
            $mail->setFrom('yousefa2566@gmail.com', 'SCCI Support'); 
            $mail->Subject = 'Thank You for Contacting Us!';

            // Styled HTML Email
            $mail->Body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
                    .container { background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
                    h2 { color:rgb(158, 45, 45); }
                    .message-box { background:rgb(62, 24, 255); color: white; padding: 10px; border-radius: 5px; display: inline-block; }
                    p { font-size: 16px; color: #333; } 
                    .footer { margin-top: 20px; font-size: 14px; color:rgb(158, 45, 45); }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>Thank You, $UserName!</h2>
                    <p>We appreciate you reaching out to us. Our team will review your message and get back to you soon.</p>
                    <p class='message-box'><b>Your Message:</b> $Message</p>
                    <p class='footer'>Best regards,<br><b>SCCI Team</b></p>
                </div>
            </body>
            </html>";

            $mail->send(); 

            $message = 'Your message has been submitted successfully. A confirmation email has been sent to you.';

        } catch (Exception $e) {
            $message = "Your message was submitted, but the email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $message = 'Failed to submit your message.';
    }
}
?>
