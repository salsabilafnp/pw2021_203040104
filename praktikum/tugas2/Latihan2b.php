<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul02 - Function

$jawabanIsset = "Isset adalah salah satu fungsi dalam php digunakan untuk memeriksa apakah variabel sudah diatur atau belum, biasanya mengecek form inputan.<br><br>";
$jawabanEmpty = "Empty adalah salah satu fungsi dalam php digunakan untuk memeriksa apakah variabel sudah terisi atau belum, biasanya mengecek nilai inputan.";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;

function soal($style) {
    return "<div class = $style><p>".$GLOBALS['isset']."</p><p>".$GLOBALS['empty']."</p></div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2B - 203040104</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .border {
            border: 2px solid black;
            padding: 12px;
        }
    </style>
</head>
<body>
    <div class="container my-3">
        <?= soal("border"); ?>
        <br>
        <a class="btn btn-danger" href="index.html">Go to Index Page</a>
    </div>
</body>
</html>