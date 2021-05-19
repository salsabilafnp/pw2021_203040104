<?php
require 'functions.php';

// tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

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
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </thead>
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