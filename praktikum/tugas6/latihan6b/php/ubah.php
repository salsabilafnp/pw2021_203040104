<?php 
require 'functions.php';

$id = $_GET["id_barang"];
$shoes = query("SELECT * FROM shoes WHERE id_barang = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
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
    <title>Cheval's - Add Item</title>
</head>
<body>
    <div class="container m-5">
        <h3 class="mb-4">Edit Item on Chevals</h3>
            <form action="" method="post">
                <ul>
                    <ol>
                        <input type="hidden" name="id_barang" id="id_barang" value="<?= $shoes['id_barang']; ?>">
                    </ol>
                    <ol class="mb-4">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" required value="<?= $shoes['name']; ?>">
                    </ol>
                    <ol class="mb-4">
                        <label for="description">Description:</label>
                        <input type="text" type="description" name="description" id="description" required value="<?= $shoes['description']; ?>">
                    </ol>
                    <ol class="mb-4">
                        <label for="price">Price: </label>
                        <input type="text" type="price" name="price" id="price" required value="<?= $shoes['price']; ?>">
                    </ol>
                    <ol class="mb-4">
                        <label for="picture">Picture: </label>
                        <input type="text" name="picture" id="picture" required value="<?= $shoes['picture']; ?>">
                    </ol>
                    <ol class="mb-4">
                        <label for="category">Category: </label>
                        <select name="category" id="category" required value="<?= $shoes['category']; ?>">
                            <option value="">--------Select the Category--------</option>
                            <option value="Casual">Casual</option>
                            <option value="Canvas">Canvas</option>
                            <option value="Runshoes">Runshoes</option>
                            <option value="Sport">Sport</option>
                        </select>
                    </ol>
                    <button type="submit" name="ubah">Edit Item</button>
                    <button type="submit">
                        <a href="../index.php">Back to the List</a>
                    </button>
                </ul>
            </form>
    </div>
</body>
</html>