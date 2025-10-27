<?php
session_start();
include 'mySQLinlog.php';

try {

$stmt = $conn->prepare("UPDATE gebruiker SET aantalwormen = aantalwormen + 1 WHERE userid = ?");
$stmt->bind_param("i", $userid);
$userid = $_SESSION['UserID'];
$stmt->execute();
}
catch(Exception $e) {
}
?>