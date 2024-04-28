<?php
// Forbindelsesoplysninger til MySQL-databasen
$servername = "localhost";
$username = "root";
$password = "root";
$database = "lydhavn";

// Opret forbindelse til MySQL-databasen
$conn = new mysqli($servername, $username, $password, $database);

// Tjek forbindelse
if ($conn->connect_error) {
    die("Forbindelse mislykkedes: " . $conn->connect_error);
}

// Hent events baseret på den angivne scene
if (isset($_GET['scene'])) {
    $scene = $_GET['scene'];

    // Hent events for den angivne scene
    $sql = "SELECT * FROM events WHERE scene = '$scene'";
    $result = $conn->query($sql);

    // Returner JSON-data
    $events = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $events[] = $row;
        }
    }
    echo json_encode($events);
} else {
    echo "Ingen scene angivet.";
}

// Luk forbindelse til MySQL-databasen
$conn->close();
?>
