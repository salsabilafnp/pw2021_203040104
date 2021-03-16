<?php
// Salsabila Febrianty NP
// 203040104
// Control Flow

// Pengulangan
// for
    //for ($i = 0; $i < 5; $i++) {
    //    echo "Hello World!<br>";
    //}
// while (cek kondisi dulu, menjalankan program)
    //$i = 0;
    //while ($i < 5) {
    //    echo "Hello World!<br>";
    //$i++;
    //}
// do ... while (menjalankan program lebih dulu)
    //$i = 10;
    //do {
    //    echo "Hello World!<br>";
    //$i++;
    //} while ($i < 5)
// foreach : pengulangan khusus array

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
    <title>Latihan 1</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
<!-- <tr> untuk baris, <td> untuk kolom -->
    <!-- Cara 1 -->
    <!--<?php
        //for($i = 1; $i <= 3; $i++){
        //    echo "<tr>";
        //        for($j = 1; $j <= 5; $j++){
        //            echo "<td>$i, $j</td>";
        //        }
        //    echo "</tr>";
        //}
    ?>-->

    <!-- Cara 2 -->
    <?php for($i = 1; $i <= 3; $i++) { ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
        <?php endif; ?>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i, $j"; ?></td>
                <!-- <_?= (tanpa _) bisa digunakan untuk mencetak string/echo -->
            <?php endfor; ?>
        </tr>
    <?php } ?>
</table>
    
</body>
</html>