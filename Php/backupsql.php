<?php
session_start();
include 'mySQLinlog.php';

// Map waar de backups moeten komen
$backupDir = __DIR__ . '/../sqlbackups';

// Bestandsnaam van de backup
$backupFile = $backupDir . '/backup_' . date('Y-m-d_H-i-s') . '.sql';

// Voer mysqldump uit
$command = "\"C:\\MAMP\\bin\\mysql\\bin\\mysqldump.exe\" -h $servername --port=3306 -u $username -p$password $database > \"$backupFile\" 2>&1";
system($command);

// Download bestand naar gebruiker
header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=\"" . basename($backupFile) . "\"");
readfile($backupFile);

exit;
?>