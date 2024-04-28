<?php
$servername = "localhost";
$username = "lydhavn";
$password = "Saturn3112";
$dbname = "Lydhavn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$stmt->execute();

$stmt->close();
$conn->close();