<?php
// Datenbankverbindung herstellen
$servername = "localhost";
$username = "vilpa";
$password = "123";
$dbname = "Database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Prüfen, ob die Verbindung erfolgreich hergestellt wurde
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gästebucheintrag erstellen
$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO guestbook (name, message) VALUES ('$name', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: guestbook.html"); // Zurück zur Gästebuchseite nach dem Eintragen
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
