<?php 
    include "service/database.php";
    session_start();
    // cek apakah sudah login
    if (isset($_SESSION["is_login"]))  {
        header("location: dashboard.php");
        exit;
    }
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // enkripsi password
        $hash_password = hash('sha256', $password);
        // cek username pada database
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$hash_password'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;
            header("location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Akun Gagal, Silahkan coba lagi!');</script>";
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
    <?php include "layout/header.html" ?>
    <h3>Masukkan AKUN</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit" name="login">Login</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>
