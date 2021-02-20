<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['company']) && isset($_POST['message']) && isset($_POST['captchaResponse'])) {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $company = filter_input(INPUT_POST, 'company');
    $message = filter_input(INPUT_POST, 'message');
    $captchaResponse = filter_input(INPUT_POST, 'captchaResponse');
} else {
    error();
}

if (!$captchaResponse) {
    error();
}

$secret = "6Lf4spYUAAAAAG845_0q97HBdurQmmKQ6wyUV628";
$remoteip = $_SERVER['REMOTE_ADDR'];
$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?"
        . "secret=" . $secret
        . "&response=" . $captchaResponse
        . "&remoteip=" . $remoteip);
$responseData = json_decode($verifyResponse);

if ($responseData->success) {

    // send mail
    $mail = new PHPMailer();                                    // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                        // Set mailer to use SMTP
        $mail->Host = 'sunwer.group';                              // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                 // Enable SMTP authentication
        $mail->Username = '	info@sunwer.group';              // SMTP username
        $mail->Password = 'PerfecT11';                           // SMTP password
        //$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        //$mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
        
        //Recipients
        $mail->setFrom('info@sunwer.group');
        $mail->addAddress('info@sunwer.group');                    // Add a recipient

        //Content
        $mail->isHTML(true);                                    // Set email format to HTML
        $mail->Subject = 'Mail from sunwer.group';
        $mail->Body    = '
                        <div>
                            <p><b>Contact information:</b></p>
                            <p><b>Name: </b>' . $name . '</p>
                            <p><b>E-mail: </b>' . $email . '</p>
                            <p><b>Phone: </b>' . $phone . '</p>
                            <p><b>Company: </b>' . $company . '</p>
                        </div>
                        <br/>
                        <div>
                            <p><b>Message text:</b></p>
                            <p>' . $message . '</p>
                        </div>
                        ';
        $mail->AltBody = 'Name:' . $name . ', E-mail:' . $email . ', Phone:' . $phone . ', Company:' . $company . ', Message text:' . $message;

        $mail->send();
        //echo 'Message has been sent';
        success();
    } catch (Exception $e) {
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
        error();
    }
} else {
    error();
}

function success() {
    echo 1; // successfull
    exit();
}

function error() {
    echo 2; // error
    exit();
}