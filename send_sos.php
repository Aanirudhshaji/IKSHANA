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

// Configure headers for the email
$headers =  'From: SOS System <ikshana32@gmail.com>' . "\r\n";
$headers .= 'Reply-To: ikshana32@gmail.com' . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";

// Send the email using the mail function
$success = mail($recipientEmail, $subject, $emailBody, $headers);

// Check if the email was sent successfully
if ($success) {
  echo "SOS message sent successfully!";
} else {
  echo "Error sending SOS message. Please check your email configuration.";
}
