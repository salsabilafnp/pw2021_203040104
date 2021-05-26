<?php
//mengecek id, jika tidak ada dikembalikan ke shoe.php
if (!isset($_GET['id'])) {
  header("location: ../shoe.php");
  exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan Query
$shoes = query("SELECT * FROM cheval where id = $id");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/icons/font/bootstrap-icons.css">
  <title>Cheval's Store</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="../shoe.php" class="fw-bold fst-italic align-middle navbar-brand">CHEVAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <a class="nav-item nav-link page-scroll" href="php/login.php">
            <button type="button" class="btn btn-1"><i class="bi bi-box-arrow-in-right"></i> Admin Page</button>
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Database -->
  <section id="detail" class="detail mt-5">
    <div class="container text-center">
      <div class="row mb-2 justify-content-around">
        <div class="col-md-6 pb-3 ">
          <img src="../assets/img/<?= $shoes["picture"]; ?>" width="450">
        </div>
        <div class="col-md-5 align-self-center">
          <div class="card">
            <div class="card-body">
              <h1 class="display-6 card-title text-uppercase fw-bold"><?= $shoes["name"]; ?></h1>
              <p class="card-text">Available Colour : <span class="fw-bold"><?= $shoes["color"]; ?></span></p>
              <?php if ($shoes['stok'] > 0) : ?>
                <p>This Shoes is <span class="text-danger fw-bold">READY</span></p>
                <p>There are <span><?= $shoes['stok']; ?> pcs</span></p>
              <?php elseif ($shoes['stok'] < 1) : ?>
                <p class="text-danger fw-bold">Out Of Stock</p>
              <?php endif; ?>
              <p class="fst-italic fw-bold"><?= $shoes["price"]; ?></p>
              <p class="text-muted"><?= $shoes["category"]; ?></p>
              <a href="" class="btn btn-primary"><i class="bi bi-cart"></i> Add to Cart</a>
            </div>
          </div>
        </div>
      </div>

      <a class="btn btn-outline-secondary my-3" href="../shoe.php">Back to The List</a>
    </div>
  </section>

  <!-- Script -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/jquery-3.5.1.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>