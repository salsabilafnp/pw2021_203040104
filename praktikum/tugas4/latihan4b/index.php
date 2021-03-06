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
<title>Cheval's Store</title>
</head>
<body>

<!-- Database -->
<div class="container my-5 text-center">
    <a class="btn btn-danger mb-4" href="../index.html">Go to Index Page</a>
    
    <table class="table table-sm">
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Picture</th>
                    <th style="width: 150px;">Name</th>
                    <th style="width: 350px;">Description</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                    <?php foreach($shoes as $row) : ?>
                        <tr>
                            <th class="align-middle"><?= $no; ?></th>
                            <td class="align-middle"><img src="assets/img/<?= $row["picture"]; ?>" width="200px"></td>
                            <td class="align-middle text-uppercase fw-bold"><?= $row["name"]; ?></td>
                            <td class="align-middle"><?= $row["description"]; ?></td>
                            <td class="align-middle fst-italic"><?= $row["price"]; ?></td>
                            <td class="align-middle text-secondary"><?= $row["category"]; ?></td>
                        </tr>
                <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </table>
</div>

</body>
</html>