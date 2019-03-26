<?php
if (isset($_POST) && sizeof($_POST) > 0) {
	
	$to = $_POST['to']['val']; // <=== Set static email here.
	
	if (isset($_POST['formtype'])) {
		unset($_POST['formtype']);
	}
	if (isset($_POST['to'])) {
		unset($_POST['to']);
	}
	
	$email_address = $_POST['email']['val'];
	$email_subject = $_POST['subject']['val'];
	$email_body    = "You have received a new message. <br/>".
				  	 "Here are the details: <br/><br/>";
				  	 foreach ($_POST as $key => $value) {
				  	 	$email_body .= "<strong>" . $value['label'] . ": </strong> " . $value['val'] . "<br/><br/>";
				  	 }
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'X-MSMail-Priority: Normal' . "\r\n";
    $headers .= 'X-Priority: 3' . "\r\n";
	$headers = "From:<$email_address>\n";
	$headers.= "Content-Type:text/html; charset=UTF-8";


	if (isset($_POST['g-recaptcha-response']['val'])) {
		if ($_POST['g-recaptcha-response']['val'] !== '') {
			if($email_address != "") {
				mail($to,$email_subject,$email_body,$headers);
				return true;
			}
		} else {
			header("Content-type: application/json");
			echo json_encode(array(
				"status" => "captcha_error",
				"type"   => "didn't complete the reCAPTCHA ! Try again."
			));
		}
	} else {
		if($email_address != "") {
			mail($to,$email_subject,$email_body,$headers);
			return true;
		}
	}
	

	
}
?>