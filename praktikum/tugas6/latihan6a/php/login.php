<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // pengecekan username dan password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container my-5">
        <form action="" method="post">
            <?php if(isset($error)) : ?>
                <p class="text-danger">Username atau Password Salah!</p>
            <?php endif; ?>
            <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-5 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>