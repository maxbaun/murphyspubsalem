<?php
/*
* Bistecca
* Copyright 2013, Simplicix Media
* www.simplicix.com
* 4/1/2013
*/
error_reporting(E_ERROR);

/* #Configuration
================================================== */
$to	 		= "info@murphyspubsalem.com"; 				// Your email
// $to     = "maxbaun@gmail.com"; // debugging
$owner	 	= "Murphys Pub Salem"; 					// Your name
$subject	= "Murphys Salem // Website Contact Form";	// Email Subject

// Some text in the email's footer
$copy		= "<br><br> ~ This email was sent from http://www.murphyspubsalem.com";


/* #Check for Google reCaptcha 
================================================== */

if(isset($_POST['g-recaptcha-response'])){
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  echo json_encode(array("error" => true, "message" => "Please check the the captcha form."));
  exit;
}

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdhyP8SAAAAAPCqAZUEhE0VAGvnnN5Z4fu6bTu4&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
if($response.success==false)
{
  echo json_encode(array("error" => true, "message" => "Failed captcha attempt" . $response));
  exit;
}

/* #Form Values
================================================== */
$name = trim(htmlspecialchars($_POST['name']));
$email = $_POST['email'];
$comments = htmlspecialchars($_POST['message']) . $copy;

// Success message
$congrats 	= "Congratulations, " . $name . ". We've received your email. We'll be in touch as soon as we possibly can!";

/* #PHP Mailer
================================================== */
require_once 'class.phpmailer.php';

$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

try {
  $mail->SetFrom($email, $name);
  $mail->AddReplyTo($email, $name);
  $mail->AddAddress($to, $owner);
  $mail->Subject = $subject;
  //$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($comments);
  
  $mail->Send();
  
  // Congrats message
  echo json_encode(array("error" => false, "message" => $congrats));
  
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}


?>