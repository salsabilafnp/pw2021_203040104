<?php 
// Salsabila Febrianty NP
// 203040104
// GET & POST

// Variable Scope
// $x hanya variabel local di halaman utama latihan1.php ini
    //$x = 10;

    // Kalau mau pake $x yg ada sebelumnya harus difunction, harus kasih keyword global dulu
    //function tampilX() {
    //    global $x;
    //    echo $x;
    //}

// Superglobals = variable global milik PHP, Array Associative
// $_GET dan $_POST = ada isinya tapi kosong
// $_GET dikirim melalui URL
// $_GET cara input data lewat program
    //$_GET["nama"] = "Salsabila Febrianty NP";
    //$_GET["npm"] = "203040104";
    //var_dump($_GET);
// $_GET cara input data lewat url
    //contoh: http://localhost/pw2021_203040104/kuliah/pertemuan7/latihan1.php?nama=Sabil&npm=203040104
    //var_dump($_GET);

// Studi Kasus
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

//$_GET["Nama"] = "Salsabila Febrianty";
//$_GET["Prodi"] = "Teknik Informatika";

//print_r($_GET);
//echo "<br>";
//var_dump($_GET);

//// Minimal versi 7
//    //echo "<br>";
//    //dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"];?>&prodi=<?= $mhs["prodi"];?>&email=<?= $mhs["email"];?>&img=<?= $mhs["img"];?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>

</body>
</html>