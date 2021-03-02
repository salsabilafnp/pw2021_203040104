<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas1</title>
    <!-- Salsabila Febrianty NP_203040104_Kamis08 -->
    <style>
        .box {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 2px solid black;
        }
        .salmon {background-color: salmon;}
        .lightblue {background-color: lightblue;}
    </style>
</head>
<body>
    <?php for ($col = 1; $col <= 6; $col++) :
        for ($line = 1; $line <= 6; $line++) :
            if ($col % 2 == !0) :
                if ($line % 2 == !0) : ?>
                    <div class="box lightblue"></div>
                <?php else : ?>
                    <div class="box salmon"></div>
                <?php endif; ?>
            <?php else :
                if ($line % 2 == !0) : ?>
                    <div class="box salmon"></div>
                <?php else : ?>
                    <div class="box lightblue"></div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>