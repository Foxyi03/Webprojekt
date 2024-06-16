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

// Gästebucheinträge abrufen und anzeigen
$sql = "SELECT * FROM guestbook ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='entry'>";
        echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
        echo "<p><strong>Message:</strong> " . $row['message'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No entries found.";
}

$conn->close();
?>
