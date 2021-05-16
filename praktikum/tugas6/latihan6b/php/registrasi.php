<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gafal');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container my-5">
        <h3 class="mb-4">Registrasi Akun</h3>
        <form action="" method="post">
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
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>

        <!-- Login -->
        <div class="regist">
            <p class="mt-3">Sudah memiliki akun? Login <a href="login.php">disini</a></p>
        </div>
    </div>
</body>
</html>