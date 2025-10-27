<?php
    session_start();
    include '../Php/account.php';
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
    <link rel="stylesheet" href="../css/accountpagecss.css">

</head>
<body>
    <?php
    include 'navigatiebalk.php';    
    ?>
    <div class="homepage_container_inhoud">
        <div class="kippie_div">
            <img class="bird" src="../afbeeldingen/Kippie.png" alt="Kippie foto">
        </div>
        <!-- een account page waar je naam, je score en je naam en account kan verwijderen. -->
        <div class="inhoud_div">
            <div>
                <h1 class="grooth1">Admin paneel</h1>
            </div>
            <div>
                <button onclick="window.location.href='../Php/backupsql.php'">Download Database</button>
            </div>
        </div>
        <div class="dicky_bird_div">
            <img class="bird" src="../afbeeldingen/Dicky_Bird.png" alt="Dicky bird foto">
        </div>
    </div>
</body>
</html>
<script src="../Javascript/vogelanimatie.js"></script>