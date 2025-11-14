<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        echo "Nama: $nama, Umur: $umur";
    }
?>
