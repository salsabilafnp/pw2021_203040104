<?php
// menghubungkan file functions
require 'functions.php';

// melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </thead>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tbody>
            <th><?= $i; ?></th>
            <th>
                <a href="">ubah</a> | <a href="">hapus</a>
            </th>
            <th><img src="img/<?= $row["gambar"]?>" width="50px"></th>
            <th><?= $row["nrp"]?></th>
            <th><?= $row["nama"]?></th>
            <th><?= $row["email"]?></th>
            <th><?= $row["jurusan"]?></th>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>