<?php
// Include the database configuration file
include 'config.php';

// Include Composer's autoloader for PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $department = htmlspecialchars($_POST['department']);
    $doctor = htmlspecialchars($_POST['doctor']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Validate date format (YYYY-MM-DD)
    // Validate the date format (MM/DD/YYYY)



    // Check for empty fields
    if (empty($name) || empty($email) || empty($phone) || empty($department) || empty($doctor) || empty($date) || empty($message)) {
        echo "All fields are required!";
        exit;
    }

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, department, doctor, date, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $department, $doctor, $date, $message);

    // Execute the statement and check if it was successful
    if ($stmt->execute()) {
        // Send the email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Use SMTP
            $mail->Host = 'smtp.hostinger.com'; // Gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'saurabh@pandaguys.in'; // Your email address
            $mail->Password = 'Saurav@123'; // Your Gmail password (or App Password)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('saurabh@pandaguys.in', 'Your Name'); // Your email
            $mail->addAddress('test705306@gmail.com', 'Saurav Singh'); // Recipient's email (you or your team)

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Appointment Booking: ' . $name;
            $mail->Body = "<b>Name:</b> $name<br>
                           <b>Email:</b> $email<br>
                           <b>Phone:</b> $phone<br>
                           <b>Department:</b> $department<br>
                           <b>Doctor:</b> $doctor<br>
                           <b>Date:</b> $date<br>
                           <b>Message:</b> $message";

            // Send email
            $mail->send();
            echo "<h1>Appointment successfully booked!</h1>";
echo "<script>
    setTimeout(function(){
        window.location.href = 'http://localhost/doctor/mail-success.php' // Redirect to the current page
    }, 3000);
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
