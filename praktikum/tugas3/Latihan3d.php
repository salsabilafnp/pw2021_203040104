<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul03 - Array

    $pemain_bola = [
        ["nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30"],
        ["nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"],
        ["nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"],
        ["nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"],
        ["nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"],
        ["nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"],
        ["nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"]
    ];

    $total_main = 0;
    $total_gol= 0;
    $total_assist = 0;
    foreach ($pemain_bola as $pb => $nilai) {
        $total_main += $nilai['main'];
        $total_gol += $nilai['gol'];
        $total_assist += $nilai['assist'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Latihan 3D</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>

        <?php $no = 1; ?>
        <tr>
            <?php foreach ($pemain_bola as $pb) : ?>
                <td><?= $no; ?></td>
                <td><?= $pb["nama"];?></td>
                <td><?= $pb["club"];?></td>
                <td><?= $pb["main"];?></td>
                <td><?= $pb["gol"];?></td>
                <td><?= $pb["assist"];?></td>
                <tr></tr>
        <?php $no++; ?> 
            <?php endforeach; ?>
        </tr>
        <tr>
            <th>#</th>
            <th colspan="2"> <center>Jumlah</center> </th>
            <th><?= $total_main ?></th>
            <th><?= $total_gol ?></th>
            <th><?= $total_assist ?></th>  
        </tr>          
    </table>

    <br>
    <a class="btn btn-danger mx-4" href="index.html">Go to Index Page</a>
    
</body>
</html>