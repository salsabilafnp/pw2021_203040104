<?php
// Menghubungkan file php lain
require 'php/functions.php';

// Melakukan Query
$shoes = query("SELECT * FROM shoes");

if (isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $shoes = query("SELECT * FROM shoes WHERE name LIKE '%$keyword%'");
} else {
    $shoes = query("SELECT * FROM shoes");
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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mx-auto">
        <div class="container">
            <a href="../tubes/index.php" class="fw-bold fst-italic align-middle navbar-brand">CHEVAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <a class="nav-item nav-link active page-scroll" href="php/registrasi.php">
                        <button type="button" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Register</button>
                    </a>
                    <a class="nav-item nav-link active page-scroll" href="php/login.php">
                        <button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Home/Main -->
        <section id="main" class="main mt-5 text-center">
            <h1 class="display-3 pt-5 fw-bold fst-italic">CHEVAL's STORE</h1>
            <p class="font-monospace">Shoes Local Brand from Indonesian Youth Group</p>
            <p>Here it is, the shoes that you are looking for.<br>Wanna find another shoe?</p>
            
            <!-- Searching -->
            <form action="" method="get">
                <input type="text" name="keyword" autofocus>
                <button type="submit" name="cari" class="btn btn-outline-secondary">Search</button>
            </form>

            <!-- Tampilan Pencarian -->
            <?php if (empty($shoes)) : ?>
                <tr>
                    <td colspan="7">
                        <h1 class="my-3">Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php endif; ?>
        </section>

        <!-- List of data -->
        <div class="row my-3 justify-content-center">
        <?php foreach($shoes as $shoe) : ?>
            <div class="col-sm-5 col-lg-3">
                <div class="card text-center mb-3">
                    <img src="assets/img/det-<?= $shoe["picture"]; ?>" class="card-img-top" width="200px">
                    <div class="card-body">
                        <a class="btn btn-primary col-12 text-uppercase fw-bold" href="php/detail.php?id=<?= $shoe['id_barang']?>">
                            <?= $shoe["name"]; ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <!-- Script -->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/jquery-3.5.1.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>