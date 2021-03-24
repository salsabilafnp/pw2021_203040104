<?php
// Salsabila Febrianty NP
// 203040104
// Halaman Log In

// cek tombol submit sudah ditekan
if ( isset($_POST["submit"]) ) {
    // cek username & password
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
    } else {
        // jika salah, tampilkan pesan error
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    
    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">username atau password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <button type="submit" name="submit">Login</button>
        </form>
    </ul>

</body>
</html>