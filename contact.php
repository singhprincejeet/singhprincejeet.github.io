<?php

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("singhprincejeet@gmail.com","My subject",$msg);


// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
// $to = 'psand057@uottawa.ca';
// $subject = "m";
// mail($to, $subject, $message, "header");
// echo "string";

// if(isset($_POST['c_message'])){

// 	$name = $_POST['c_name'];
// 	$email = $_POST['c_email'];
// 	$message = $_POST['c_message'];
    
	
// 	$to      = 'singhprincejeet@gmail.com';
// 	$subject = 'Site Contact Form';

// 	$headers = 'From: '. $email . "\r\n" .
//     'Reply-To: '. $email . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// 	$status = mail($to, $subject, $message, $headers);

// 	if($status == TRUE){	
// 		$res['sendstatus'] = 'done';
	
// 		//Edit your message here
// 		$res['message'] = 'Form Submission Successful';
//     }
// 	else{
// 		$res['message'] = 'Failed to send mail. Please mail me to you@example.com';
// 	}
	
	
// 	echo json_encode($res);
// }
// echo "prince";

?>