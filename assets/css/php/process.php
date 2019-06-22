<?php
$to = "acjones0391@gmail.com"; /* email */
$subject = "E-mail from my protfolio site" /* email subject */

$name = $_POST['Name'];
$email = $_POST['Email'];
$comment = $_POST['Comment'];


// The Headers
$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";
// Mail
mail($to, $subject, $comment, $headers);
// Message to Users
echo "E-mail has been sent successfully. Thank you and haev an awesome day, $name!";

?>