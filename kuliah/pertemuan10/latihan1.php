<?php
// koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040104');

// query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// mysqli_fetch_row() berupa array numerik
// mysqli_fetch_assoc() berupa array associative
// mysqli_fetch_array() berupa keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;

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
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tbody>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="50"></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tbody>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>