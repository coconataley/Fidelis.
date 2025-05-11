<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'nathaliebiana@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"Subject: $subject.\n".
				"User Message: $message.\n".

$to = 'group1.gena@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_from \r\n";

mail($to,$email_subject,$email_body,$headers);
					
				
mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");
?>