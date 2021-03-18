<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul03 - Array

$sepatu = [
    [
        "pict" => "sport1.jpg",
        "name" => "Runshoes for Woman",
        "description" => "Running shoes for Woman, <br> there's many colour available is black, grey, and pink.",
        "price" => "Rp 249k",
        "category" => "Sport, Women"
    ],
    [
        "pict" => "kidshoe.jpg",
        "name" => "Baby Shoe Blue Square",
        "description" => "Baby Shoes for 4-6 months, <br> there's many colour available is blue and pink.",
        "price" => "Rp 199k",
        "category" => "baby, kids"
    ],
    [
        "pict" => "leathershoemen.jpg",
        "name" => "Leather for Go",
        "description" => "Leather Shoes for Men, <br> available colour is only dark brown.",
        "price" => "Rp 349k",
        "category" => "work, men"
    ],
    [
        "pict" => "casual.jpg",
        "name" => "Old School",
        "description" => "Casual Shoes for hangout, school, or anything. <br> There's colour available is black, grey, white, red, and lilac.",
        "price" => "Rp 99k",
        "category" => "casual"
    ],
    [
        "pict" => "heels.jpg",
        "name" => "Glamour Heels",
        "description" => "Stiletto heels with 7 cms, <br> there's colour available only silver and gold.",
        "price" => "Rp 199k",
        "category" => "Women, heels"
    ],
    [
        "pict" => "sport2.jpg",
        "name" => "Runshoes for Men",
        "description" => "Running shoes for Men, <br> there's many colour available is only grey and blue.",
        "price" => "Rp 249k",
        "category" => "Sport, Men"
    ],
    [
        "pict" => "womanshoe.jpg",
        "name" => "Nude Shoes",
        "description" => "Flatshoes for work, hangout, party, or anything, <br> there's only cream colour is available.",
        "price" => "Rp 129k",
        "category" => "Women, work"
    ],
    [
        "pict" => "flatshoe.jpg",
        "name" => "Ribbon Flatshoes",
        "description" => "Flatshoes for hangout, party, or anything, <br> there's only pink colour is available.",
        "price" => "Rp 79k",
        "category" => "Women, flatshoes"
    ],
    [
        "pict" => "tennisshoe.jpg",
        "name" => "Tennis Shoes",
        "description" => "Shoes for running, tennis, or another sport activity, <br> there's only white colour is available.",
        "price" => "Rp 399k",
        "category" => "Sport"
    ],
    [
        "pict" => "pinkheels.jpg",
        "name" => "Bludru Flatheels",
        "description" => "Flat heels with 5 cms, <br> there's colour available only pink and nude.",
        "price" => "Rp 139k",
        "category" => "Women, work"
    ]
];

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<title>Cheval's Store</title>
</head>
<body>
    <div class="container mt-5 mb-5 text-center">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody >
            <?php $no = 1; ?>
                <tr>
                    <?php foreach ($sepatu as $s) : ?>
                        <td><?= $no; ?></td>
                        <td><img src="img/<?= $s["pict"]; ?>"></td>
                        <td class="fw-bold"><?= $s["name"];?></td>
                        <td><?= $s["description"];?></td>
                        <td class="fst-italic"><?= $s["price"];?></td>
                        <td class="text-uppercase badge bg-primary text-wrap"><?= $s["category"];?></td>
                        <tr></tr>
                <?php $no++; ?> 
                    <?php endforeach; ?>
                </tr>
            </tbody>
    </div>
</body>
</table>
</html>