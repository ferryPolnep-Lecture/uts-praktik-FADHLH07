<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts5a";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS krs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    nim VARCHAR(10) NOT NULL,
    kelas VARCHAR(10) NOT NULL,
    matkul TEXT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table krs created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>