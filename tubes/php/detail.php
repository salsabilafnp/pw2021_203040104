<?php
//mengecek id_barang, jika tidak ada dikembalikan ke index.php
if (!isset($_GET['id_barang'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id_barang'];

// Melakukan Query
$shoes = query("SELECT * FROM shoes where id_barang = $id");

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
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mx-auto">
    <div class="container">
      <a href="../index.php" class="fw-bold fst-italic align-middle navbar-brand">CHEVAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <a class="nav-item nav-link active page-scroll" href="../php/registrasi.php">
            <button type="button" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Register</button>
          </a>
          <a class="nav-item nav-link active page-scroll" href="../php/login.php">
            <button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Database -->
  <section id="detail" class="detail my-5">
    <div class="container text-center">
      <div class="row my-3 justify-content-center">
        <div class="col-md-6 pb-3 ">
          <img src="../assets/img/<?= $shoes["picture"]; ?>" width="450">
        </div>
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-uppercase"><?= $shoes["name"]; ?></h5>
              <p class="card-text"><?= $shoes["description"]; ?></p>
              <p class="fst-italic"><?= $shoes["price"]; ?></p>
              <p class="text-muted"><?= $shoes["category"]; ?></p>
              <a href="" class="btn btn-primary"><i class="bi bi-cart"></i> Add to Cart</a>
            </div>
          </div>
        </div>
      </div>

      <a class="btn btn-outline-secondary" href="../index.php">Back to The List</a>
    </div>
  </section>

  <!-- Script -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/jquery-3.5.1.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>