<?php
session_start();
include 'mySQLinlog.php';

try {

$UserID = $_SESSION['UserID'];
if (htmlspecialchars($_POST['delete'] === "DELETE")) {
    $stmt = $conn->prepare("DELETE FROM gebruiker WHERE UserID = ?");
    $stmt->bind_param("i", $UserID);
    $stmt->execute();
    header('location: ../paginas/aanmeldpage.php');
}
else {
    $_SESSION['confirm_delete'] = "false";
    header('location: ../paginas/acc_delete.php');
}}
catch(Exception $e) {
    echo "error" . $e->getMessage();
}
?>