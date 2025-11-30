<?php
// Email sending backend for Anushree Collection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Receiver email
    $to = "Imankush8541@gmail.com";

    $subject = "New Message from Anushree Collection Website";

    $body = "Name: $name\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: no-reply@anushreecollection.com\r\n";
    $headers .= "Reply-To: $phone\r\n";

    // Send the mail
    if (mail($to, $subject, $body, $headers)) {
        echo "SUCCESS: Your message was sent!";
    } else {
        echo "ERROR: Unable to send email.";
    }
} else {
    echo "ERROR: Invalid request.";
}
?>
