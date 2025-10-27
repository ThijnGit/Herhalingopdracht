<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
echo "<a href='./adminpaneel.php'>adminpaneel</a>";
include '../Php/registreerlog.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cssreset.css">
    <link rel="stylesheet" href="../css/pagecss.css">
    <link rel="stylesheet" href="../css/vogelanimatiecss.css">
    <link rel="stylesheet" href="../css/wormanimatie.css">
    <link rel="stylesheet" href="../css/homepagecss.css">
</head>
<body>
    
    <?php
    include 'navigatiebalk.php';    
    ?>
    <!-- Homepage met wat informatie en hyperlink naar account en waar je punten kunt verdienen. -->
    <div class="homepage_container_inhoud">
        <div class="kippie_div">
            <img class="bird" src="../afbeeldingen/Kippie.png" alt="Kippie foto">
        </div>
        <div class="inhoud_div">
            <div>
                <h1 class="grooth1">Welkom op de home pagina!</h1>
            </div>
            <br>
            <div>
                <p class="grootp">Klik alle wormen die verschijnen aan de onderkant van de website! Vind je score bij <a href="./accountpage.php">Account</a> </p>
            </div>
            <div class="wormen_spawn_div">
                <img id="worm" src="../afbeeldingen/Worm.png" alt="Worm">
            </div>
        </div>
        <div class="dicky_bird_div">
            <img id="bird" class="bird" src="../afbeeldingen/Dicky_Bird.png" alt="Dicky bird foto">
        </div>
    </div>
</body>
</html>
<script src="../Javascript/vogelanimatie.js"></script>
<script src="../Javascript/wormanimatie.js"></script>
<script src="../Javascript/wormteller.js"></script>

