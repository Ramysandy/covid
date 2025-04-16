<?php
// Database configuration
$servername = "localhost"; // Hostname
$username = "root";        // Default username for XAMPP
$password = "";            // Default password (empty for XAMPP)
$dbname = "thesis";        // Name of the database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful message (optional for debugging)
// echo "Connected successfully";
?>
