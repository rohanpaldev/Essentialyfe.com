<?php 


require ('../bat/phpmailer/PHPMailer.php');
require ('../bat/phpmailer/SMTP.php');
require ('../bat/phpmailer/Exception.php');
//Define name spaces

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$email = "";
$subject= "";
$content = "";

if (isset($_POST['submit'])){
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $content= mysqli_real_escape_string($conn, $_POST['content']);
    try {
        //Server settings
        //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rohan.pal@bonamisoftware.com';                     //SMTP username
        $mail->Password   = '9899Roh(*&^an';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPin bloTION_STARTTLS
    
        //Recipients
        $mail->setFrom('rohan.pal@bonamisoftware.com');
        $mail->addAddress('rohan.pal@bonamisoftware.com');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Test Email';
        $mail->Body    = $email ."<br>" . $subject."<br>".$content;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        // $mail->AddAddress($name, $email, $massage);
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    }
  

?>