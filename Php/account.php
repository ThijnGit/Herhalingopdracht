<?php
session_start();
include 'mySQLinlog.php';

try {

$UserID = $_SESSION['UserID'];

$stmt = $conn->prepare("SELECT Naam, AantalWormen FROM gebruiker WHERE UserID = ?");
$stmt->bind_param("i", $UserID);
$stmt->execute();

$stmt->bind_result($naam, $aantalwormen);
if ($stmt->fetch()) {
    $_SESSION['naam'] = $naam;
    $_SESSION['aantalwormen'] = $aantalwormen;
}}
catch(Exception $e) {
    echo "error" . $e->getMessage();
}
?>