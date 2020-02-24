<?php
    // Imaginons qu'on stocke résultat en base (teasing !).
    $filename="kilo_stock.csv";
    $handle=fopen($filename,'r+');
    $nbKilo=fread($handle,filesize($filename));
    ftruncate($handle,0);
    rewind($handle);
    $km_ajouté=$_POST['kiloReal'];
    $nv_km = $km_ajouté + $nbKilo;
    fwrite($handle,$nv_km);
    header('Location: index.php');
    exit;
?>
