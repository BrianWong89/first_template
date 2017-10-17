<?php
require("../../vendor/autoload.php");

$data = json_decode(file_get_contents('php://input'), true);
use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

$is_valid = GUMP::is_valid($data, array(
    'name' => 'required|valid_name',
    'email' => 'required|valid_email',
    'message' => 'required|alpha_space|max_len,500|min_len,10'
));

if($is_valid === true) {
    echo "Success!";
} else {
    print_r($is_valid);
}

$mail = new PHPMailer();
//Enable SMTP debugging.
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "brian.alphis@gmail.com";
$mail->Password = "samada12";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->setFrom('brian.alphis@gmail.com', 'Brian\'s Testing Email');
$mail->addAddress('darkness3nity@yahoo.com.sg', 'Brian Wong');
$mail->addAddress('kenneth@alphis.net', 'Kenneth Lee');
$name = $data['name'];
$email = $data['email'];
$message = $data['message'];
$mail->Body = nl2br("Name: " . $name . "\n Email Address: " . $email . "\n Message: " . $message . "");
$mail->IsHTML(true);