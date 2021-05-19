<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa atau query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() untuk mengembalikan array numerik
// mysqli_fetch_assoc() untuk mengembalikan array associative
// mysqli_fetch_array() untuk mengembalikan 2 jenis array
// mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result)) {
//    var_dump($mhs);
// }

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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>
    </table>
</body>
</html>