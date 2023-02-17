<?
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'plsp@inquire.com'
$email_subject = 'New Form Submission'
$email_body = "User Name: $name.\n".
				"User Email: $email.\n".
					"Subject: $subject.\n".
						"User Message: $message.\n";

$to = 'plspsample@inquire.com';

$headers = "Form: $email_from \r\n";
$headers .= "Reply To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);



header("Location: contact.html");








?>