<?php
// Salsabila Febrianty NP
// 203040104
// GET & POST

// method get => $_GET
// method post => $_POST
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?= $_POST["nama"]; ?> </title>
</head>
<body>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?>!</h1>
</body>
</html>