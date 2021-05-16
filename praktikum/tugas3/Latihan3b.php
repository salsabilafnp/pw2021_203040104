<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul03 - Array

$pemain_bola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Latihan 3B</title>
</head>
<body>

    <h3>Daftar pemain bola terkenal</h3>
    <ol>
    <?php foreach($pemain_bola as $pb) : ?>
            <li><?= $pb ?></li>
        <?php endforeach; ?>
    </ol>

    <!-- tambahan nama dan mengurutkan nama -->
    <h3>Daftar pemain bola terkenal baru</h3>
    <?php
        array_push($pemain_bola, "Luca Modric", "Sadio Mane");
        sort($pemain_bola);
    ?>

    <ol>
    <?php foreach($pemain_bola as $pb) : ?>
            <li><?= $pb ?></li>
        <?php endforeach; ?>
    </ol>

    <br>
    <a class="btn btn-danger mx-4" href="index.html">Go to Index Page</a>

</body>
</html>