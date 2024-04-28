<?php
// Forbindelsesoplysninger til MySQL-databasen
$servername = "127.0.0.1"; // ændr dette til din MySQL-serveradresse
$username = "root"; // ændr dette til dit MySQL-brugernavn
$password = "root"; // ændr dette til din MySQL-adgangskode
$database = "lydhavn"; // ændr dette til navnet på din MySQL-database

// Opret forbindelse til MySQL-databasen
$conn = new mysqli($servername, $username, $password, $database);

// Tjek forbindelse
if ($conn->connect_error) {
    die("Forbindelse mislykkedes: " . $conn->connect_error);
}

// Tjekker om formularen er blevet sendt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Modtag input fra formularen
    $scene = $_POST["scene"];
    $datetime = $_POST["datetime"];
    $artist = $_POST["artist"];
    $description = $_POST["description"];

    // Gem dataene, eller udfør andre relevante handlinger (f.eks. gemme i en database)
    // Her kan du tilføje kode til at gemme event-oplysningerne eller udføre andre relevante opgaver.

    // Bare for demonstration, udskriv dataene til skærmen
    echo "<h2>Event oprettet!</h2>";
    echo "<p><strong>Scene:</strong> $scene</p>";
    echo "<p><strong>Tid og Dato:</strong> $datetime</p>";
    echo "<p><strong>Kunsternavn:</strong> $artist</p>";
    echo "<p><strong>Beskrivelse:</strong> $description</p>";
} else {
    // Hvis formularen ikke er sendt, kan du omdirigere brugeren tilbage til oprettelsessiden eller udføre andre relevante handlinger.
    // Her kan du tilføje kode til at omdirigere brugeren tilbage til oprettelsessiden.
}

// Luk forbindelse til MySQL-databasen
$conn->close();
?>
