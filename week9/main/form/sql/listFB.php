<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedbackDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE listFB (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(255) NOT NULL,
user_email VARCHAR(255) NOT NULL,
user_web VARCHAR(255),
user_comm VARCHAR(255),
gender VARCHAR(10) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table listFB created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>