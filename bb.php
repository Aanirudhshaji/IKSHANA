<?php

// Replace with your email configuration details
$recipientEmail = "ikshana32@gmail.com";
$subject = "SOS Alert";

// Get data from the request (replace with actual logic based on your approach - AJAX or form submission)
$message = $_POST["message"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];

// Construct the email body
$emailBody = "Emergency! User located at:\n";
$emailBody .= "https://maps.google.com/?q=${latitude},${longitude}\n";
$emailBody .= "\nMessage:\n";
$emailBody .= $message;

// Use a library like PHPMailer for sending emails (replace with your chosen library or method)
require 'path/to/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// Configure email settings (SMTP, authentication, etc.) - **YOU NEED TO FILL THIS IN**
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server details
$mail->SMTPAuth = true;
$username = 'ikshana32@gmail.com'; // Replace with your email credentials
$password = 'ikshana@123'; // Replace with your email password
$mail->Username = $username;
$mail->Password = $password;
$mail->SMTPSecure = 'tls'; // Replace with appropriate security protocol (if applicable)
$mail->Port = 465; // Replace with your SMTP port

$mail->setFrom($username, 'SOS System'); // Set sender email and name

// ... rest of the code ...
