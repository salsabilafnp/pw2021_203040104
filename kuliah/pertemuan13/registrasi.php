<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan, silakan login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('user gagal ditambahkan!');
            document.location.href = 'registrasi.php';
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
  <title>Registrasi</title>
</head>

<body>
  <h3>Form Daftar Akun</h3>

  <form action="" method="post">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Password :
          <input type="password" name="password1" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="registrasi">Registrasi</button>
      </li>
      <br>
      <li>
        <a href="login.php">Login Akun</a>
      </li>
    </ul>
  </form>
</body>

</html>