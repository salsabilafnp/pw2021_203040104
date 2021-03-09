<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul02 - Function

function hitungDeterminan($a, $b, $c, $d) {
    //baris code perhitung determinan
    $hasil = (($a * $d) - ($b * $c));
    //menampilkan matriks
    echo "<table style='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td> $a </td>
                <td> $b </td>
            </tr>
            <tr>
                <td> $c </td>
                <td> $d </td>
            </tr>
        </table>";
    //tampilan hasil determinan
    echo "<h3>Determinan dari matriks tersebut adalah $hasil</h3>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2D - 203040104</title>
    <style>
        .border {
            border: 1px solid black;
            padding: 15px;
            width: 350px;
        }
    </style>
</head>
<body>
    <div class="border">
        <?php hitungDeterminan(1,2,3,4); ?>
    </div>
</body>
</html>