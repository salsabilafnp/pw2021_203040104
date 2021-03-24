<?php 
// Salsabila Febrianty NP
// 203040104
// Associative Array
// key-nya string yang dibuat sendiri

$mahasiswa = [
    ["nama" => "Salsabila FNP",
    "NPM" => "203040104", 
    "prodi" => "Teknik Informatika",
    "email" => "salsabilafebriantynp@gmail.com"],
    ["nama" => "Fadila C",
    "NPM" => "182010025",
    "prodi" => "Pendidikan Bahasa Sunda",
    "email" => "fadilachoi@gmail.com"],
    ["nama" => "Neng Santi M",
    "NPM" => "181030013",
    "prodi" => "Keperawatan",
    "email" => "nengsantim@gmail.com"],
    ["nama" => "Annisa RT",
    "NPM" => "184040115",
    "prodi" => "Ekonomi Pembangunan",
    "email" => "regitatriar@gmail.com"]
];

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

    <!-- tampilan foreach data 1 mahasiswa -->
    <!--<ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- tampilan foreach untuk data array numerik multidimensi -->
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NPM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

    <!-- tampilan foreach untuk array asosiatif -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs["npm"]; ?></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["prodi"]; ?></li>
        <li><?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>