<?php
// Include the database configuration file
include 'config.php';

// Include Composer's autoloader for PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $newsletterSubscription = isset($_POST['news']) ? 1 : 0;

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, subject, message, newsletter_subscription) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $phone, $subject, $message, $newsletterSubscription);

    // Execute the statement
    if ($stmt->execute()) {
        // Send the email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Use SMTP
            $mail->Host = 'smtp.hostinger.com'; // SMTP server (Gmail example)
            $mail->SMTPAuth = true;
            $mail->Username = 'saurabh@pandaguys.in'; // Your Gmail address
            $mail->Password = 'Saurav@123'; // Your Gmail app password (not your regular password)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('saurabh@pandaguys.in', 'Your Name'); // Use your email
            $mail->addAddress('test705306@gmail.com', 'Saurav Singh'); // Recipient's email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission: ' . $subject;
            $mail->Body    = "<b>Name:</b> $name<br><b>Email:</b> $email<br><b>Phone:</b> $phone<br><b>Subject:</b> $subject<br><b>Message:</b> $message";

            // Send email
            $mail->send();
            echo "<h1>Thank you for contacting us!</h1>";
            echo "<p>Your message has been successfully sent. We will get back to you shortly.</p>";
            echo "<script>
                setTimeout(function(){
                    window.location.href = 'http://yourwebsite.com';
                }, 3000); // Redirect after 3 seconds
            </script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
