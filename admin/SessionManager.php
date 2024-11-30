<?php
require('config.php'); // Include the database connection (if needed)

class SessionManager {
    // Start the session
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Log out the user
    public function logout() {
        if (isset($_SESSION['username'])) {
            // Clear session variables
            session_unset();

            // Destroy the session
            session_destroy();

            // Invalidate the session cookie
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            }

            // Redirect to home or login page
            header("Location: ../index.php");
            exit();
        } else {
            // Redirect to login page if user is not logged in
            header("Location: ../login.php");
            exit();
        }
    }
}
?>
