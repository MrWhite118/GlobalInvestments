<?php
session_start();
// require_once('./db_conn.php');

// if (isset($_POST)) {
//     $email = $_POST['findEmail'];
//     $number = $_POST['findNumber'];
//     $randomCode = mt_rand(111111,999999);
//     $_SESSION['random'] = $randomCode;
//     $message = "Your Reset Code is ".$randomCode;
//     $subject = "Reset Code";
//     $to =  $email;
//     $result = mail($to, $subject, $message);
//     $_SESSION['username'] = $email;
//     echo "<script> alert('continue');</script>";
//     // header("Location: index.php");
// } else {
//         echo "<script> alert('error');</script>";
//     }

// if (isset($_POST[''])) {
//     # code...
// } else {
//     # code...
// }

require './phpmailer/PHPMAILERAutoload.php';
$mail = new PHPMAILER;
// $mail->isSMIP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='globalinvestment118@gmail.com';
$mail->Password='olaeighteen18';

$mail->setFrom('globalinvestment118@gmail.com');
$mail->addAddress('abdullateefoteju@gmail.com');
$mail->addReplyTo('globalinvestment118@gmail.com');

$mail->isHTML(true);
$mail->Subject='TESTING';
$mail->Body='<h1 align=center> Hello from Testing</h1><br> <p> Testing 12345</p>';
if (!$mail->send()) {
    echo 'Message could not be sent';
} else {
    echo 'Message has been sent';
}




?>
