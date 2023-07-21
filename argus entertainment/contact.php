<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// send data to an email address
$to = 'you@example.com';
$subject = 'New Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
  echo 'Thank you for contacting us!';
} else {
  echo 'An error occurred. Please try again later.';
}
?>
