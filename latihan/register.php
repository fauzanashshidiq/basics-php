<?php 
    include "service/database.php";
    session_start();
    if (isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
        exit;
    }
    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // enkripsi password
        $hash_password = hash('sha256', $password);
        try {
            // Tambahkan User baru ke database
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hash_password')";
            
            if ($db->query($sql)) {
                echo "<script>alert('User Baru berhasil ditambahkan!');</script>";
            } else {
                echo "<script>alert('User Baru GAGAL, Silahkan Coba lagi!');</script>";
            }
        } catch(mysqli_sql_exception $e) {
            echo "<script>alert('User sudah ada, silakan ganti username lain!');</script>";
        }
        $db->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "layout/header.html"; ?>
<h3>DAFTAR AKUN</h3>
<form action="register.php" method="POST">
    <input type="text" placeholder="username" name="username" required />
    <input type="password" placeholder="password" name="password" required />
    <button type="submit" name="register">Register</button>
</form>
<?php include "layout/footer.html"; ?>
</body>
</html>
