<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- form om je account te verwijderen -->
        <h1>Weet je zeker dat je account wil verwijderen?</h1>
        <form action="../Php/delete.php" method="post">
            <label for="">Typ "DELETE" en klik op ok om je account permanent te verwijderen. (Dit kan niet terug gedraait worden!)</label>
            <br>
            <br>
            <input name="delete" type="text">
            <br>
            <input type="submit" value="ok">
        </form>
        <!-- Check om te kijken of confirmatie goed is geschreven -->
    <?php
        if ($_SESSION['confirm_delete'] == "false") {
            echo "DELETE is fout geschreven.";
        }
    ?>

    </div>
</body>
</html>