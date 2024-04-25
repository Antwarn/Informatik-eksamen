<?php
$servername = "localhost";
$username = "localhost@AntonMerkelsen";
$password = "Informatik123";
$dbname = "informatik-eksamen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO events (event_name, event_date, picture, stage_nr, event_details) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $eventName, $eventDate, $picture, $stageNr, $eventDetails);

// Set parameters and execute
$eventName = $_POST['eventName'];
$eventDate = $_POST['eventDate'];
$picture = $_FILES['picture']['name']; // Assuming picture will be stored as file name
$stageNr = $_POST['stageNr'];
$eventDetails = $_POST['eventDetails'];
$stmt->execute();

$stmt->close();
$conn->close();
?>
