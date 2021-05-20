<?php
session_start();

// cek user sudah login
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <a href="logout.php">Logout</a>

  <h3>Daftar Mahasiswa</h3>

  <!-- Tambah Data -->
  <a href="../pertemuan10/tambah.php">Tambah Data</a>
  <br><br>

  <!-- Search Data -->
  <form action="" method="post">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </thead>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <h3 style="color: red;">Data Tidak Ditemukan</h3>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tbody>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="50"></td>
        <td><?= $mhs['nama']; ?></td>
        <td><a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a></td>
      </tbody>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>