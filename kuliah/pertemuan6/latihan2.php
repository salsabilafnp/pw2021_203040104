<?php 
// Salsabila Febrianty NP
// 203040104
// Associative Array
// key-nya string yang dibuat sendiri

$mahasiswa = [
    [
        "img" => "salsabila.jpg",
        "nama" => "Salsabila FNP",
        "npm" => "203040104", 
        "prodi" => "Teknik Informatika",
        "email" => "salsabilafebriantynp@gmail.com"
    ],
    [
        "img" => "fadila.jpg",
        "nama" => "Fadila C",
        "npm" => "182010025",
        "prodi" => "Pendidikan Bahasa Sunda",
        "email" => "fadilachoi@gmail.com"],
    [
        "img" => "santi.jpg",
        "nama" => "Neng Santi M",
        "npm" => "181030013",
        "prodi" => "Keperawatan",
        "email" => "nengsantim@gmail.com"
    ],
    [
        "img" => "annisa.jpg",
        "nama" => "Annisa RT",
        "npm" => "184040115",
        "prodi" => "Ekonomi Pembangunan",
        "email" => "regitatriar@gmail.com"
    ]
];

// Cara menampilkan satu elemen pada array multidimensi
    //echo $mahasiswa[1]["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- tampilan foreach untuk array asosiatif -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <img src="img/<?= $mhs["img"]; ?>" width="100px">
        <li><?= $mhs["npm"]; ?></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["prodi"]; ?></li>
        <li><?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>