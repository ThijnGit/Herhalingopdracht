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
    <title>Accountpagina</title>
    <link rel="stylesheet" href="../css/cssreset.css">
    <link rel="stylesheet" href="../css/pagecss.css">
    <link rel="stylesheet" href="../css/vogelanimatiecss.css">
    <link rel="stylesheet" href="../css/accountpagecss.css">
</head>
<body>
    <?php include 'navigatiebalk.php'; ?>
    <div class="homepage_container_inhoud">
        <div class="kippie_div">
            <img class="bird" src="../afbeeldingen/Kippie.png" alt="Kippie foto">
        </div>

        <div class="inhoud_div">
            <div>
                <h1 class="grooth1">Je Account</h1>
            </div>
            <br>
            <div>
                <p class="grootp">Naam: <?php echo $_SESSION['naam']; ?></p>
                <p class="grootp">Aantal wormen: <?php echo $_SESSION['aantalwormen']; ?></p>
                <br>

                <!-- Naam wijzigen -->
                <form action="../Php/update.php" method="post">
                    <label for="nieuw_naam">Verander Gebruikernaam</label>
                    <input name="nieuw_naam" type="text">
                    <input type="submit">
                </form>
                <br>

                <!-- PDF download knop -->
                <form action="../Php/download_pdf.php" method="post">
                    <button type="submit">Download PDF</button>
                </form>
                <br>

                <!-- Account verwijderen -->
                <a class="deletebutton" href="./acc_delete.php">Account verwijderen</a>
            </div>
        </div>

        <div class="dicky_bird_div">
            <img class="bird" src="../afbeeldingen/Dicky_Bird.png" alt="Dicky bird foto">
        </div>
    </div>
</body>
</html>
<script src="../Javascript/vogelanimatie.js"></script>
