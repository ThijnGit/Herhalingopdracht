<?php
session_start();
include 'mySQLinlog.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wachtwoord_inloggen'])) {
        $naam = htmlspecialchars($_POST['naam_inloggen']);
        $wachtwoord = htmlspecialchars($_POST['wachtwoord_inloggen']);

        $stmt = $conn->prepare("SELECT UserID FROM gebruiker WHERE Naam = ? AND Wachtwoord = ?");
        $stmt->bind_param("ss", $naam, $wachtwoord);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

    if ($row && isset($row['UserID'])) {
        $_SESSION['UserID'] = $row['UserID'];
        header('location: ../paginas/homepage.php');
    }
    $stmt->close();
}}
catch(Exception $e) {
    echo "error" . $e->getMessage();
}
?>