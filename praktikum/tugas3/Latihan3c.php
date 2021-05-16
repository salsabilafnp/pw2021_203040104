<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul03 - Array

$pemain_bola = [
    "Cristiano Ronaldo" =>"Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Latihan 3C</title>
</head>
<body>

    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
        <?php foreach ($pemain_bola as $nama => $club) : ?>
            <tr>
                <td><b><?= $nama;?></b></td>
                <td>:</td>
                <td><?= $club;?></td>
            </tr>
            <?php endforeach; ?>
    </table>

    <br>
    <a class="btn btn-danger mx-4" href="index.html">Go to Index Page</a>

</body>
</html>