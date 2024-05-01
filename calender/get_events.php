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

// Hent event baseret på den angivne scene
if (isset($_GET['scene'])) {
    $scene = $_GET['scene'];

    // Hent event for den angivne scene
    $sql = "SELECT * FROM event WHERE scene = '$scene'";
    $result = $conn->query($sql);

    // Returner JSON-data
    $event = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $event[] = $row;
        }
    }
    echo json_encode($event);
} else {
    echo "Ingen scene angivet.";
}

// Luk forbindelse til MySQL-databasen
$conn->close();
?>
