<?php
// Salsabila Febrianty NP
// 203040104
// Sintaks Dasar PHP

// Standar Output
// echo, print = mencetak tulisan atau isi variabel
// string bisa ditulis dengan "..." atau '...'
// angka, boolean tanpa "..."
    //echo "Salsabila Febrianty Nurul Putri";
    //print "Salsabila Febrianty Nurul Putri";
// print_r untuk array, bisa mencetak dan debugging
// var_dump untuk debugging, cek isi variabel dan menampilkan informasi tipe data serta ukuran nilai variabel

// Penulisan sintaks PHP
// 1. PHP didalam HTML (direkomendasikan)
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel $nama_variabel = "nilai variabel";
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// tidak boleh mengandung spasi
    //$nama = "Salsabila";
//echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - / %(modulus, sisa bagi)
    //$x = 10;
    //$y = 20;
    //echo $x + $y;
// Penggabung string atau Concatenation atau concat untuk menggabungkan string
// .
    //$nama_depan = "Salsabila";
    //$nama_belakang = "Putri";
    //echo $nama_depan . $nama_belakang;
// Assignment
// =, +=, -=, *=, /=, .=(concat)
// kalau ada variabel yg sama operasi berlaku ke variabel yang sama dan ditulis lebih awal bisa saling menutupi atau bergabung
    $nama = "Salsabila";
    $nama .= " ";
    $nama .= "Febrianty";
    echo $nama;
// Perbandingan untuk pengkondisian
// <, >, <=, >=, ==, !=(tidak sama dengan)
    //var_dump(1 == "1");
// Identitas untuk melakukan pengecekan penggunaan tipe data
// ===, !==
    //var_dump(1 === "1");
// Logika
// &&(dan, benar jika keduanya True), ||(atau, benar jika salah satunya True), !(not)
    //$x = 30;
    //var_dump($x <20 || $x % 2 == 0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <!-- PHP didalam HTML -->
    <h1>Halo, Selamat Datang <?php echo $nama ;?></h1>
    <p><?php echo "ini adalah paragraf";?></p>
    <!-- HTML didalam PHP -->
    <?php 
        echo "<h1>Halo, Selamat Datang Salsabila<h1>";
    ?>
</head>
<body>
    
</body>
</html>