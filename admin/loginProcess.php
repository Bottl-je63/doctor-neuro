<?php 
require('config.php');  // Ensure session is started in the config file

if (isset($_POST['submit'])) {

    // Retrieve and sanitize inputs
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $userpass = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Check if inputs are empty
    if (empty($username) || empty($userpass)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }

    // Use prepared statements for security
    $sql = "SELECT * FROM register WHERE email = ? ";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($result) < 1) {
            // Redirect to login page with error message
            header("Location: ../login.php?error=nouser");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                // Verify the password
                if (password_verify($userpass, $row['password'])) {
                    // Set session variables
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['email'];  // Store the email or username in the session
                    
                    // Redirect to a protected page, for example, dashboard
                    header("Location: contactdata.php");
                    exit();
                } else {
                    // Password verification failed
                    header("Location: ../login.php?error=incorrectpassword");
                    exit();
                }
            }
        }
    } else {
        // Handle SQL statement preparation errors
        header("Location: ../login.php?error=sqlerror");
        exit();
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Redirect to index if the form isn't submitted
    header("Location: ../index.php");
    exit();
}
?>
