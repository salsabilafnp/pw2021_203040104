<?php
// Salsabila Febrianty NP
// 203040104
// GET & POST

// POST mengirimkan data dibalik tampilan, tidak tampil di URL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<!-- Cara untuk default form -->
<!--<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?>!</h1>
<?php endif; ?>-->

<!-- default action="halaman yang sama" method="get" -->
<form action="latihan4.php" method="POST">
    Masukkan Nama Anda :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
    
</body>
</html>