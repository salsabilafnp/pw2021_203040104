<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul02 - Function
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Latihan 2A - 203040104</title>
    <style>
    .style1 {
        font-size: 28px;
        font-family: arial;
        color: #8c782d;
        font-style: italic;
        font-weight: bolder;
        padding-left: 25px;
    }

    .style2 {
        border: 1.5px solid black;
        box-shadow: 0 0 12px #000;
        border-radius: 5px;
    }
    </style>
</head>
<body>

    <div class="container my-3">
    <?php
        function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2"){
            return "<div class=$style2><p class=$style1>$tulisan</p></div>";
        }
        echo gantiStyle("Selamat datang di praktikum PW");
    ?>
    <br>
    <a class="btn btn-danger" href="index.html">Go to Index Page</a>
    </div>

</body>
</html>