<?php
    $file = fopen("data.txt", "a");
    fwrite($file, "Contoh Teks\n");
    fclose($file);

    $file = fopen("data.txt", "r");
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
?>
