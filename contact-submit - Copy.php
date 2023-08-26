<?php
include('config.php');
require('smtp/PHPMailerAutoload.php');
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$captcha=$_POST['captcha'];


$user_bodytext = "Hello $first_name $last_name,
Thank you for your interest our team will contact you soon.
Thanks & Regards,
Retailers Association of India (RAI)
111/112, Ascot Centre, Near Hotel ITC Maratha, Sahar Road, Sahar,
Andheri (E), Mumbai - 400099. 
Tel : +91 22 28269527 - 29 
";
$user_subject = "Humanarms";
$client_message = "Hi Humanarms 
Name : $name
Mobile : $email
Email ID : $phone
Message : $message";


if($_SESSION['CODE']==$captcha && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['email'])){
$client_subject = "Contact Form Humanarms";
$mail_array =  array('emailid');



$sql = "INSERT INTO contact(name,email,phone,message) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";

sendmail($user_bodytext,$user_subject,$email);

    
foreach($mail_array as $mail){
	sendmail($client_message,$client_subject,$mail);
}


if ($link->query($sql) === TRUE) {
  
    
echo 'Thank you for showing interest, will contact you soon'; 
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
else{
	echo "Please enter valid captcha code";
}



function sendmail($body,$sub,$toemail){
    $body = $body;
$subject = $sub;
$to = $toemail;
$from_name = "###";
$from = "###";

	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = '###';
	$mail->Port = 587; 
	$mail->Username = "###";  
	$mail->Password = "###";           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->addAddress($to);
		
	
	if(!$mail->Send()) {
		return $mail->ErrorInfo;
	//	return 0;
		//'Mail error: '.$mail->ErrorInfo;
	} else {
		
		return  1;
	}

}


?>