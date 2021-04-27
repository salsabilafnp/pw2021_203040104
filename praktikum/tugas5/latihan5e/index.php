<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul04 - MySQL

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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

<title>Cheval's Store</title>
</head>
<body>

<div class="container my-5">
    <h2 class="mx-5 my-5">Cheval's List</h2>

    <!-- button action -->
    <div class="admin mb-4 float-sm-end">
        <a href="php/admin.php">
            <button type="button" class="btn btn-outline-warning">Admin Page</button>
        </a>
    </div>
    <!-- Searching -->
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" class="btn btn-outline-secondary">Search</button>
    </form>

    <!-- Tampilan Pencarian -->
    <?php if (empty($shoes)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
    <?php endif; ?>

<!-- List of data -->
<div class="container my-5">
    <?php foreach($shoes as $shoe) : ?>
        <h5 class="name">
            <a href="php/detail.php?id=<?= $shoe['id_barang']?>">
                <?= $shoe["name"]; ?>
            </a>
        </h5>
    <?php endforeach; ?>
</div>

</body>
</html>