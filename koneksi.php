<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'p11';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
