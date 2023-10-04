<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $recipient = "bessgoldstein@gmail.com"; // Replace with your email address

    // Build the email message
    $email_message = "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Set email headers
    $headers = "From: $email";

    // Send the email
    $success = mail($recipient, "Contact Form Submission - $subject", $email_message, $headers);

    if ($success) {
        // Redirect to a thank-you page or back to the form page
        header("Location: thank_you.html");
    } else {
        // Display an error message
        echo "Error sending the email. Please try again later.";
    }
} else {
    // Handle cases where the form is not submitted
    echo "Form submission error. Please try again.";
}
?>
