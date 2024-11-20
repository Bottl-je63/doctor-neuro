<?php
// Include database configuration
include('config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the email from the form
    $email = isset($_GET['email']) ? trim($_GET['email']) : '';

    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    // Prepare SQL query
    $sql = "INSERT INTO subscribers (email) VALUES (?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    // Execute and check if successful
    if ($stmt->execute()) {
        echo "Email successfully added to the database!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method!";
}
?>
