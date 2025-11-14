<?php
    $file = fopen("bukutamu.txt", "r");

    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
?>
