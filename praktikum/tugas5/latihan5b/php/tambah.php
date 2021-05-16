<?php 
require 'functions.php';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Cheval's - Add Item</title>
</head>
<body>
    <div class="container m-5">
        <h3 class="mb-4">Add New Item on Chevals</h3>
            <form action="" method="post">
                <ul>
                    <ol class="mb-4">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" required>
                    </ol>
                    <ol class="mb-4">
                        <label for="description">Description:</label>
                        <input type="text" name="description" id="description" required>
                    </ol>
                    <ol class="mb-4">
                        <label for="price">Price: </label>
                        <input type="text" name="price" id="price" required>
                    </ol>
                    <ol class="mb-4">
                        <label for="picture">Picture: </label>
                        <input type="text" name="picture" id="picture" required>
                    </ol>
                    <ol class="mb-4">
                        <label for="category">Category: </label>
                        <select name="category" id="category" required>
                            <option value="">--------Select the Category--------</option>
                            <option value="Casual">Casual</option>
                            <option value="Canvas">Canvas</option>
                            <option value="Runshoes">Runshoes</option>
                            <option value="Sport">Sport</option>
                        </select>
                    </ol>
                    <button type="submit" name="tambah">Add Item</button>
                    <button type="submit">
                        <a href="../index.php">Back to the List</a>
                    </button>
                </ul>
            </form>
    </div>
</body>
</html>