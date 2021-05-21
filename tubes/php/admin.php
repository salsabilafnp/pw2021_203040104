<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

$shoes = query("SELECT * FROM shoes");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $shoes = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/icons/font/bootstrap-icons.css">
  <title>Cheval's - Admin Page</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mx-auto">
    <div class="container">
      <a href="../php/admin.php" class="fw-bold fst-italic align-middle navbar-brand">CHEVAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <a class="nav-item nav-link active page-scroll" href="../php/registrasi.php">
            <button type="button" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Register</button>
          </a>
          <!-- logout -->
          <a href="../php/logout.php" class="nav-item nav-link active page-scroll">
            <button type="button" class="btn btn-secondary"><i class="bi bi-box-arrow-right"></i> Logout</button>
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Admin -->
  <section id="admin" class="my-5 container justify-content-center">
    <h1 class="text-center display-5 fw-bold mb-3">Cheval's Database</h1>

    <!-- Action Bar -->
    <form action="" method="POST" class="mb-3">
      <!-- Searching -->
      <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
      <button type="submit" name="cari" class="tombol-cari btn btn-secondary">Search</button>
      <!-- add -->
      <a href="../php/tambah.php" class="btn btn-primary float-sm-end"><i class="bi bi-plus-circle"></i> Add Item</a>
    </form>

    <!-- tabel database -->
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
    </div>
  </section>

  <!-- Script -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/jquery-3.5.1.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>