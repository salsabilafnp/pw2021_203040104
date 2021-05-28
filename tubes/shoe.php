<?php
// Menghubungkan file php lain
require 'php/functions.php';

// Melakukan Query
$shoes = query("SELECT * FROM cheval");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $shoes = cari($_POST['keyword']);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/icons/font/bootstrap-icons.css">
  <title>Cheval's Store</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="shoe.php" class="fw-bold fst-italic align-middle navbar-brand">CHEVAL</a>
      <ul class="navbar-nav">
        <a class="nav-item nav-link page-scroll" href="php/login.php">
          <button type="button" class="btn btn-1"><i class="bi bi-box-arrow-in-right"></i> Admin Page</button>
        </a>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <section id="main" class="container text-center">
    <!-- Home/Main -->
    <div class="main my-5 py-3">
      <h1 class="display-3 py-2 fw-bold fst-italic">CHEVAL's PRODUCT</h1>
      <p>Here it is, the shoes that you are looking for.<br>Wanna find another shoe?</p>
      <!-- Searching -->
      <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari btn btn-outline-secondary">Search</button>
      </form>
    </div>

    <div class="data">
      <!-- List of data -->
      <div class="row mt-5 justify-content-center">
        <!-- Tampilan Pencarian -->
        <?php if (empty($shoes)) : ?>
          <h2 class="my-3 fst-italic text-danger">Data tidak ditemukan</h2>
        <?php endif; ?>
        <?php foreach ($shoes as $shoe) : ?>
          <div class="col-sm-5 col-md-3">
            <div class="card text-center mb-3">
              <img src="assets/img/<?= $shoe["picture"]; ?>" class="card-img-top" width="200px">
              <div class="card-body">
                <a class="btn btn-4 col-12 text-uppercase fw-bold" href="php/detail.php?id=<?= $shoe['id'] ?>"><?= $shoe["name"]; ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>

  <!-- Script -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>