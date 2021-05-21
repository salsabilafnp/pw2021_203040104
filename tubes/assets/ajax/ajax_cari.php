<?php
require '../../php/functions.php';

$shoes = cari($_GET['keyword']);

?>

<div class="data">
  <table class="table table-sm align-middle table-bordered table-striped table-hover text-center">
    <thead>
      <th scope="col">No.</th>
      <th scope="col">Opsi</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
    </thead>

    <!-- Tampilan Pencarian -->
    <?php if (empty($shoes)) : ?>
      <tr>
        <td colspan="7">
          <h1 style="color: red;">Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>

    <?php $no = 1; ?>
    <?php foreach ($shoes as $shoe) : ?>
      <tbody>
        <td><?= $no; ?></td>
        <td style="width: 100px" class="text-center">
          <!-- button edit -->
          <a href="ubah.php?id_barang=<?= $shoe['id_barang']; ?>" class="btn btn-sm btn-outline-primary m-1">
            <i class="bi bi-pencil-square"></i> Edit
          </a>
          <!-- button delete -->
          <a href="hapus.php?id_barang=<?= $shoe['id_barang']; ?>" class="delete btn btn-sm btn-outline-danger" onclick="return confirm('Delete This?')"><i class="bi bi-trash"></i> Delete</a>
        </td>
        <td style="width: 300px">
          <img class="m-1" src="../assets/img/<?= $shoe["picture"]; ?>" width="50%">
        </td>
        <td style="width: 150px" class="fw-bold text-uppercase"><?= $shoe["name"]; ?></td>
        <td><?= $shoe["description"]; ?></td>
        <td style="width: 100px" class="fst-italic"><?= $shoe["price"]; ?></td>
        <td class="fw-bold" style="width: 100px"><?= $shoe["category"]; ?></td>
      </tbody>
      <?php $no++; ?>
    <?php endforeach; ?>
  </table>