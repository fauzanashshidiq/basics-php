<?php
    $nilai = 85;

    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 75) {
        echo "Grade: B";
    } else {
        echo "Grade: C";
    }

    echo "<br><br>";

    // For
    for ($i = 0; $i < 5; $i++) {
        echo $i;
    }

    echo "<br><br>";

    // While
    $i = 0;
    while ($i < 5) {
        echo $i;
        $i++;
    }

    echo "<br><br>";

    // Foreach
    $buah = array("apel", "pisang", "jeruk");
    foreach ($buah as $item) {
        echo $item . " ";
    }
?>
