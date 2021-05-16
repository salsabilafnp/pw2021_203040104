<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul04 - MySQL

// Menghubungkan file php lain
require 'php/functions.php';

// Melakukan Query
$shoes = query("SELECT * FROM shoes");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">

<title>Cheval's Store</title>
</head>
<body>

<h2 class="mx-5 my-5">Cheval's List</h2>

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