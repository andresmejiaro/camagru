<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Starting the email sending process...\n";

// Test if the script reaches here
echo "Preparing to send email...\n";

// Define the recipient email
$to = 'no-reply@microsoft.com';

// Define the subject
$subject = 'Test Email';

// Define the message body
$message = 'This is a test email to verify MailHog configuration.';

// Define the headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <your-email@localhost>' . "\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Test email has been sent";
} else {
    echo "Failed to send test email";
    $error = error_get_last();
    if ($error !== null) {
        error_log("Mail failed: " . $error['message']);
        echo "Mail failed: " . $error['message'];
    } else {
        error_log("Mail failed: Unknown error");
        echo "Mail failed: Unknown error";
    }
}

echo "Email sending process finished.\n";
?>
