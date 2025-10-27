<?php
session_start();
include 'mySQLinlog.php';

try {
echo $_POST['nieuw_naam'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nieuw_naam'])) {
$naam_nieuw = $_POST['nieuw_naam'];
$UserID = $_SESSION['UserID'];


$stmt = $conn->prepare("UPDATE gebruiker SET Naam= ? WHERE UserID = ?");
$stmt->bind_param("si", $naam_nieuw, $UserID);
$stmt->execute();
$stmt->close();

header('location: ../paginas/accountpage.php');
}}
catch(Exception $e) {
    echo "error" . $e->getMessage();
}
?>