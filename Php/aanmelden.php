<?php
session_start();
include 'mySQLinlog.php';

try {
    if (htmlspecialchars($_POST['wachtwoord_aanmelden']) === htmlspecialchars($_POST['herhaal_wachtwoord'])) {
    $_SESSION['wachtwoord_overeen'] = 'true';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['naam_aanmelden'])) {
$naam = htmlspecialchars($_POST['naam_aanmelden']);
$wachtwoord = htmlspecialchars($_POST['wachtwoord_aanmelden']);

$stmt = $conn->prepare("INSERT INTO gebruiker (Naam, Wachtwoord) VALUES ('$naam', '$wachtwoord')");
$stmt->execute();
$stmt->close();

header('location: ../paginas/aanmeldpage.php');
}}
else {
    header('location: ../paginas/aanmeldpage.php');
    $_SESSION['wachtwoord_overeen'] = 'false'; 
}
}
catch(Exception $e) {
    echo "error" . $e->getMessage();
}
?>