<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create the email message
    $email_message = "
    Name: " . $name . "
    Email: " . $email . "
    Phone: " . $phone . "
    Subject: " . $subject . "
    Message: " . $message;

    // Set headers for the email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail("ransfordoppong375@gmail.com", "New Message", $email_message, $headers)) {
        header("Location: ../mail-success.html");
        exit;
    } else {
        echo "Error sending the email.";
    }
} else {
    echo "Invalid request.";
}
?>
