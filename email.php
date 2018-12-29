<?php
$subject = $_REQUEST['subject']; // Subject of your email
$to = 'rumenlishkoff@gmail.com';  //Recipient's E-mail
$headers  = 'MIME-Version: 1.0';
$headers .= "From: " . $_REQUEST['email']; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1';
$message .= 'Name: ' . $_REQUEST['name'];
$message .= $_REQUEST['message'];
if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}

?>
