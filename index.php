<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
        <title>Paydal</title>
    </head>
    <body>
        <?php
        $filename="kilo_stock.csv";
        $handle=fopen($filename,'r+');
        $nbKilo=fread($handle,filesize($filename));
        ?>
        <form action="ajoutKilo.php" method="POST">
            <div>
                Kilométrage total&nbsp;:<?php echo $nbKilo ?> km
            </div>
            <div>
                <label for="kiloReal">Kilometrage réalisé&nbsp;:</label>
                <input type="text" name="kiloReal" value="0" autofocus>
                <input type="submit" name="action" value="Ajouter">
            </div>
        </form>


    </body>
</html>
