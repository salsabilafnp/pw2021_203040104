<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul02 - Function

function tumpukanBola($tumpukan) {
    for ($i = 1; $i <= $tumpukan; $i++) {
        for ($j = 1; $j <= $i; $j++){
            echo "<div class = 'bola'>". $i ."</div>";
        }
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Latihan 2C - 203040104</title>
    <style>
        .bola {
            height: 45px;
            width: 45px;
            border-radius: 50%;
            background-color: salmon;
            display: inline-block;
            margin: 5px;
            line-height: 45px;
            border: 1.5px solid black;
            text-align: center;
        }

        .border {
            border: 2px solid black;
            padding: 10px;
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container my-3">
        <div class="border">
            <?= tumpukanBola(5); ?>
        </div>
        <br>
        <a class="btn btn-danger" href="index.html">Go to Index Page</a>
    </div>
</body>
</html>