<?php
$log = require __DIR__ . '/../logs/logger.php';

// Log een info-bericht
$log->info('Pagina geladen', ['url' => $_SERVER['REQUEST_URI']]);

// Log een fout
try {
    // code die fout kan geven
    throw new Exception('Testfout');
} catch (Exception $e) {
    $log->error('Er is een fout opgetreden', ['message' => $e->getMessage()]);
}
?>