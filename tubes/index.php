<?php
// Menghubungkan file php lain
require 'php/functions.php';

// Melakukan Query
$shoes = query("SELECT * FROM cheval WHERE id < 4");

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
      <a href="index.php" class="fw-bold fst-italic align-middle navbar-brand">CHEVAL</a>
      <ul class="navbar-nav">
        <a class="nav-item nav-link page-scroll" href="php/login.php">
          <button type="button" class="btn btn-1"><i class="bi bi-box-arrow-in-right"></i> Admin Page</button>
        </a>
      </ul>
    </div>
  </nav>

  <!-- Home/Main -->
  <div class="home"></div>
  <div class="home-text container my-5 py-5 text-center fw-bold">
    <h1 class="display-3 py-3 fw-bold fst-italic">CHEVAL's STORE</h1>
    <p class="font-monospace">Shoes Local Brand from Indonesian Youth Group</p>
    <p>Here it is, the shoes that you are looking for.<br>Wanna find another shoe?</p>
    <a href="#data" class="btn btn-2 fw-bold my-3">CHECK NOW <i class="fs-5 bi bi-shop fw-bold"></i></a>
  </div>

  <section id="data" class="container text-center my-3">
    <!-- List of data -->
    <div class="row mt-5 justify-content-evenly">
      <h1 class="mb-4">Cheval's Product</h1>
      <?php foreach ($shoes as $shoe) : ?>
        <div class="col-sm-5 col-md-3">
          <div class="card text-center mb-3">
            <img src="assets/img/<?= $shoe["picture"]; ?>" class="card-img-top" width="200px">
            <div class="card-body">
              <a class="btn btn-4 col-12 text-uppercase fw-bold" href="php/detail.php?id=<?= $shoe['id'] ?>">
                <?= $shoe["name"]; ?>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="shoe.php" class="btn btn-3 mb-3 fw-bold">see more product ... </a>
  </section>

  <!-- Footer -->
  <footer>
    <p class="text-center my-0 py-2 bg-main text-sec font-poppins">&copy; 2021 Salsabila FNP - 203040104</p>
  </footer>

  <!-- Script -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>