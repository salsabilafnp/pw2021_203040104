<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan1b</title>
    <!-- Salsabila Febrianty NP_203040104_Kamis08 -->
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
            <tr>
                <th>Baris <?= $j; ?></th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <td>Baris <?= $j; ?>, Kolom <?= $i; ?></td>
                <?php endfor; ?>
            </tr>        
        <?php endfor; ?>
    </table>
</body>
</html>