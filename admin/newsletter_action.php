<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 

require ('./bat/phpmailer/PHPMailer.php');
require ('./bat/phpmailer/SMTP.php');
require ('./bat/phpmailer/Exception.php');
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include("./config.php");
// $tblprefix= "essentials_";
$currentDate = date("Y-m-d H:i:s");

if(isset($_POST['subscribeNewsLetter'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $chknewsltr = mysqli_query($conn,"SELECT `email` FROM `newsletter` WHERE `email` = '$email' ");

    if(mysqli_num_rows($chknewsltr)==0){
     $newsubscription = mysqli_query($conn, "INSERT INTO `newsletter`(`email`, `date`) VALUES ('$email','$currentDate')");
    }
    // print_r($newsubscription);
    // die();
    mysqli_error($conn);
    if($newsubscription){
        
        //Create instance of PHPMailer
        $mail = new PHPMailer();
        //Set mailer to use smtp
        $mail->isSMTP();
        //Define smtp host
        $mail->Host = "smtp.gmail.com";
        //Enable smtp authentication
        $mail->SMTPAuth = true;
        //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
        //Port to connect smtp
        $mail->Port = "587";
        //Set gmail username
        $mail->Username = "essentialyfeleads@gmail.com";
        //Set gmail password
        $mail->Password = "Avi123!#$";
        //Email subject
        $mail->Subject = "Thank You For Subscribing To Our Newsletter";
        //Set sender email 
        $mail->setFrom("essentialyfeleads@gmail.com");
        //Enable HTML
        $mail->isHTML(true);
        //Attachment
        // $mail->addAttachment('img/attachment.png');
        //Email body

        $mail->Body = "
        <!doctype html>
        <html lang='en-US'>
        
        <head>
            <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
            <title>Thank You Template</title>
            <meta name='description' content='Reset Password Email Template.'>
            <style type='text/css'>
                a:hover {text-decoration: underline !important;}
            </style>
        </head>
        
        <body marginheight='0' topmargin='0' marginwidth='0' style='margin: 0px; background-color: #f2f3f8;' leftmargin='0'>
            <!--100% body table-->
            <table cellspacing='0' border='0' cellpadding='0' width='100%' bgcolor='#f2f3f8'
                style='@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;'>
                <tr>
                    <td>
                        <table style='background-color: #f2f3f8; max-width:670px;  margin:0 auto;' width='100%' border='0'
                            align='center' cellpadding='0' cellspacing='0'>
                            <tr>
                                <td style='height:80px;'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td style='text-align:center;'>
                                <div style='position: relative;'>
                                    <img width='60' src='https://essentialyfe.com/images/L6pNiaZY.jpeg' title='logo' alt='logo' style='height: 214px;width: 639px;overflow: hidden; '>
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'
                                        style='max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);'>
                                        <tr>
                                            <td style='height:40px;'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style='padding:0 35px;'>
                                                <h1 style='color:#1e1e2d;font-weight:500;margin:0;font-size:32px;margin-top: 15px;font-family:Rubik,sans-serif;font-weight: 600;'>Thank You For Subscribing To Our Newsletter</h1>
                                                <span
                                                style='display:inline-block;vertical-align:middle;margin: 15px 0 26px;border-bottom: 2px solid #000000;width: 134px;'></span>
                                                <p style='color:#455056; font-size:15px;line-height:24px; margin:0;'>
                                                    We have a combined experience in the industry so you will be receiving only the best service.
                                                    If you have any questions or comments about the service please email back and we will respond to your inquiry promptly.
                                                </p>
                                                <p style='font-size:14px;color: rgb(0 187 255);line-height:18px;margin:0 0 0;margin-top: 30px;'> <strong>https://essentialyfe.com/</strong></p><br>
                                                <a href='https://essentialyfe.com/' title='logo' target='_blank'>
                                         <img width='60' src='https://essentialyfe.com/images/logo-default-450x37.png' title='logo' alt='logo' style=' height: 74px; width: 269px;'>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='height:40px;'>&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            <tr>
                                <td style='height:20px;'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td style='text-align:center;'>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td style='height:80px;'>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--/100% body table-->
        </body>
        
        </html>
        ";

        $mail->addCC($email);
        $mail->addAddress('info@essentialyfe.com');
        //Finally send email
        $mail->send();
        $mail->smtpClose();
        echo "<div class='alert alert-success text-white' role='alert'>
        Your newsletter has been submitted.
        </div>";
       
      
    }else{
        echo "<div class='alert alert-danger' role='alert' style='color: white;'>
        You have already subscribed.
        </div>";
    }
}

//delete subscribed email
if(isset($_GET['del'])){
    $id= $_GET['del'];
    $sql = "DELETE FROM `newsletter` WHERE `id`=$id";
    $result= mysqli_query($conn, $sql);
    if ($result) {
        echo "Your row has been deleted";
        // header("location:newsletter.php");

    }else{
        echo "Row is not deleted yet";
    }
}


?>