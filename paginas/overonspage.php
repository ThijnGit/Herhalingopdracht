<?php 
session_start();
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
    <link rel="stylesheet" href="../css/overonspagecss.css">

</head>
<body>
    <?php
    include 'navigatiebalk.php';
    ?>
    <div class="homepage_container_inhoud">
        <div class="kippie_div">
            <img class="bird" src="../afbeeldingen/Kippie.png" alt="Kippie foto">
        </div>
        <div class="inhoud_div">
            <div>
                <h1 class="grooth1">Welkom op de over ons pagina!</h1>
            </div>
            <br>
            <div>
                <p class="grootp">Wij zijn kippie en dicky bird. Wij houden van wormen, maar andere beestjes vinden wij ook lekker.</p>
            </div>
        </div>
        <div class="dicky_bird_div">
            <img class="bird" src="../afbeeldingen/Dicky_Bird.png" alt="Dicky bird foto">
        </div>
    </div>
</body>
</html>
<script src="../Javascript/vogelanimatie.js"></script>