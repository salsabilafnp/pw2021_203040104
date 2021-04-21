<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$shoes = query("SELECT * FROM shoes");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $shoes = query("SELECT * FROM shoes WHERE
            name LIKE '%$keyword%' OR price LIKE '%$keyword%' OR description LIKE '%$keyword%' OR category LIKE '%$keyword%' ");
} else {
    $shoes = query("SELECT * FROM shoes");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cheval's - Admin Page</title>
</head>
<body>
<!-- Tampilan Pencarian -->
<?php if (empty($shoes)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
<?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($shoes as $shoe) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <div class="update"><a href="ubah.php?id=<?= $shoes['id_barang']; ?>"></a></div>
                <div class="delete"><a href="hapus.php?id=<?= $shoes['id_barang']; ?>" onclick="return confirm('Delete This?')"></a></div>
            </td>
            <td style="width: 35%;"><img src="../assets/img/<?= $shoe["picture"]; ?>" width="50%"></td>
            <td class="fw-bold text-uppercase"><?= $shoe["name"];?></td>
            <td><?= $shoe["description"];?></td>
            <td class="fst-italic"><?= $shoe["price"];?></td>
            <td class="fw-bold"><?= $shoe["category"];?></td>
            <tr></tr> 
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
<?php endif; ?>

<div class="container mt-5 mb-5">
    <!-- button action -->
    <div class="add mb-4 float-sm-end">
        <button type="button" class="btn btn-outline-primary">
            <a href="tambah.php">Add Item</a>
        </button>
    </div>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>

    <!-- tabel database -->
    <table class="table table-sm align-middle table-bordered table-striped table-hover text-center">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Opsi</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>                    <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody >
        <?php $no = 1; ?>
            <tr>
            <?php foreach ($shoes as $shoe) : ?>
                <td><?= $no; ?></td>
                <td style="width: 125px" class="text-center">
                    <a href="ubah.php?id=<?= $shoes['id_barang']; ?>">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    </a>
                    <a href="hapus.php?id=<?= $shoes['id_barang']; ?>" onclick="return confirm('Delete This?')">
                        <button type="button" class="delete btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
                <td style="width: 35%;"><img src="../assets/img/<?= $shoe["picture"]; ?>" width="50%"></td>
                <td class="fw-bold text-uppercase"><?= $shoe["name"];?></td>
                <td><?= $shoe["description"];?></td>
                <td class="fst-italic"><?= $shoe["price"];?></td>
                <td class="fw-bold"><?= $shoe["category"];?></td>
                <tr></tr>
        <?php $no++; ?> 
            <?php endforeach; ?>
            </tr>
        </tbody> 
    </div>
</body>
</html>