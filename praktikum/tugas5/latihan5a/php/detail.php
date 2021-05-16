<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul04 - MySQL

//mengecek id_barang, jika tidak ada dikembalikan ke index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan Query
$shoes = query("SELECT * FROM shoes where id_barang = $id")[0];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">


<title>Cheval's Store</title>
</head>
<body>

<!-- Database -->
<div class="container my-5 text-center">
    <div class="pict">
        <img src="../assets/img/<?= $shoes["picture"]; ?>">
    </div>
    <div class="detail">
        <h3 class="my-3 text-uppercase"><?= $shoes["name"]; ?></h3>
        <p><?= $shoes["description"]; ?></p>
        <p class="fst-italic"><?= $shoes["price"]; ?></p>
        <p class="text-secondary"><?= $shoes["category"]; ?></p>
    </div>

    <button class="back-btn btn btn-outline-secondary"><a href="../index.php">Back to The List</a></button>
</div>

</body>
</html>