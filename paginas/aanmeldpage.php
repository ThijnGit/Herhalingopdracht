<?php
    session_start();
    session_destroy();
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
    <link rel="stylesheet" href="../css/inloggenpagecss.css">

</head>
<body>
    <div class="homepage_container_inhoud">
        <div class="kippie_div">
            <img class="bird" src="../afbeeldingen/Kippie.png" alt="Kippie foto">
        </div>
        <div class="inhoud_div">
            <!-- Aanmeld form -->
            <form action="../Php/aanmelden.php" method="post">
                <label for="">naam</label>
                <input name="naam_aanmelden" type="text" required>
                <br>
                <label for="">wachtwoord</label>
                <input name="wachtwoord_aanmelden" type="password" required>
                <br>
                <label for="">herhaal wachtwoord</label>
                <input name="herhaal_wachtwoord" type="password" required>
                <br>
                <input type="submit" value="aanmelden">
                <br>
                <!-- Check of de wachtwoorden overeen komen. -->
                <?php
                    if ($_SESSION['wachtwoord_overeen'] === "false") {
                        echo "Wachtwoorden komen niet overeen";
                    }
                ?>
                <br>
            </form>
            <a href="./inlogpage.php">Heb je al een account? LOG IN</a>
        </div>
        <div class="dicky_bird_div">
            <img class="bird" src="../afbeeldingen/Dicky_Bird.png" alt="Dicky bird foto">
        </div>
    </div>
</body>
</html>
<script src="../Javascript/vogelanimatie.js"></script>