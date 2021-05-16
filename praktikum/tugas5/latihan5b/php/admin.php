<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$shoes = query("SELECT * FROM shoes");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Cheval's - Admin Page</title>
</head>
<body>
<div class="container mt-5 mb-5">
    <a class="btn btn-danger mb-4" href="../../index.html">Go to Index Page</a>

    <!-- button action -->
    <div class="add mb-4">
        <button type="button" class="btn btn-outline-primary">
            <a href="tambah.php">Tambah Data</a>
        </button>
    </div>

    <!-- tabel database -->
    <table class="table table-sm align-middle table-bordered table-striped table-hover text-center">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Opsi</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>                    <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody >
        <?php $no = 1; ?>
            <tr>
            <?php foreach ($shoes as $shoe) : ?>
                <td><?= $no; ?></td>
                <td style="width: 125px" class="text-center">
                    <a href=""><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href=""><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                </td>
                <td style="width: 35%;"><img src="../assets/img/<?= $shoe["picture"]; ?>" width="50%"></td>
                <td class="fw-bold text-uppercase"><?= $shoe["name"];?></td>
                <td><?= $shoe["description"];?></td>
                <td class="fst-italic"><?= $shoe["price"];?></td>
                <td class="fw-bold"><?= $shoe["category"];?></td>
                <tr></tr>
        <?php $no++; ?> 
            <?php endforeach; ?>
            </tr>
        </tbody> 
    </div>
</body>
</html>