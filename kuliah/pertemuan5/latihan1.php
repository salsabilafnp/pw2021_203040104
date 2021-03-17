<?php 
// Salsabila Febrianty NP
// 203040104
// Array

// Array = variabel yang bisa mempunyai banyak nilai
// Elemen pada array boleh punya tipe data berbeda
// pasangan antara key (index, mulai dari nol) dan value

// membuat array
    // cara lama
    $hari = array("Senin", "Selasa");
    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];

// Menampilkan Array
// var_dump() untuk menampilkan array (index, tipe data, dan value)
    //var_dump($hari);
//echo "<br>";
// print_r() untuk menampilkan array (index dan value)
    //print_r($bulan);
//echo "<br>";

// Menampilkan 1 elemen array
    //echo $bulan[1];

// Menambahkan elemen baru
    var_dump($hari);
    $hari[] = "Kamis";
    echo "<br>";
    var_dump($hari);

?>