<?php
require '../functions.php';

$mahasiswa = cari($_GET['keyword']);

?>

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