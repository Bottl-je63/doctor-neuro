<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Database {
    private $servername = "localhost";
    private $database = "doctor";
    private $username = "root";
    private $password = "";
    private $conn;

    // Constructor to initialize the database connection
    public function __construct() {
        $this->connect();
    }

    // Establishing a connection
    private function connect() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        
        // Check connection
        if (!$this->conn) {
            error_log("Connection failed: " . mysqli_connect_error());
            die("Connection failed: Please try again later.");
        }
    }

    // Method to get the connection
    public function getConnection() {
        return $this->conn;
    }

    // Close the connection
    public function closeConnection() {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$db = new Database();
$conn = $db->getConnection();

// You can now perform queries with $conn
// Example: $result = mysqli_query($conn, "SELECT * FROM users");

// Close the connection when done
?>
