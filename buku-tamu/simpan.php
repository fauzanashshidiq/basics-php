<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $pesan = $_POST['pesan'];
        $data = "Nama: $nama, Pesan: $pesan\n";
        
        $file = fopen("bukutamu.txt", "a");
        fwrite($file, $data);
        fclose($file);
        
        echo "Data berhasil disimpan!<br>";
        echo "<a href='lihat.php'>Lihat Buku Tamu</a>";
    }
?>
