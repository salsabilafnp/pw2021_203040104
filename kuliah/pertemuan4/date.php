<?php 
// Salsabila Febrianty NP
// 203040104
// Function

// Built-in Function Date/Time
    // Date (referensi on click the sintax or php.net)
    // menampilkan tanggal dengan format tertentu
        //echo date("l, d-M-y <br>");
    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
        //echo time();
    // menggabungkan 2 fungsi, time bisa ditambah/kurang
        //echo date("l", time()+60*60*24*100);
    // mktime(jam, menit, detik, bulan, tanggal, tahun)
    // membuat sendiri detik
        //echo date("l", mktime(0,0,0,2,27,2001));
    // strtotime
        //echo date("l", strtotime("27 Feb 2001"));

// Built-in Function String
    // strlen() untuk menghitung panjang string
    // strcmp() untuk membandingkan string
    // explode() untuk memecah string menjadi array
    // htmlspecialchars() untuk menjaga keamanan web

// Built-in Function Utility
    // var_dump() untuk mencetak isi atau informasi dari variabel, array, objek
    // isset() untuk mengecek keberadaan variabel, pernah dibuat atau belum
    // empty() untuk mengecek isi variabel, ada nilai atau tidak
    // die() untuk memberhentikan program
    // sleep() untuk memberhentikan sementara, bisa diatur

?>