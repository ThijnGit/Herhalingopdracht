<?php
session_start();
include '../Php/account.php';
require '../vendor/autoload.php';

use Dompdf\Dompdf;

// Nieuwe Dompdf instantie
$dompdf = new Dompdf();

// Bouw HTML voor de PDF
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Je Account</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #333; }
        p { font-size: 16px; }
    </style>
</head>
<body>
    <h1>Je Account</h1>
    <p>Naam: ' . $_SESSION['naam'] . '</p>
    <p>Aantal wormen: ' . $_SESSION['aantalwormen'] . '</p>
</body>
</html>
';

// Laad HTML in Dompdf
$dompdf->loadHtml($html);

// Papierformaat instellen
$dompdf->setPaper('A4', 'portrait');

// Render PDF
$dompdf->render();

// Stuur PDF naar browser met download prompt
$dompdf->stream("account.pdf", ["Attachment" => 1]);
exit;
?>
