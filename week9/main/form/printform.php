<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, user_name, user_email, reg_date FROM krbondoc_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"].  "<br>" . "Name: " . $row["user_name"]. "<br>" . "Email: " . $row["user_email"]. "<br>" . "Registration date: " . $row["reg_date"] . "<br>";
  }
} else {
  echo "Table no content";
}
$conn->close();
?>