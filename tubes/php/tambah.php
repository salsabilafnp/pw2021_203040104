<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

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
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/icons/font/bootstrap-icons.css">
    <title>Cheval's - Add Item</title>
</head>
<body>

    <!-- Add -->
    <div class="add container my-5">
        <div class="row justify-content-center">
            <div class="card col-sm-10 col-md-8">
                <div class="card-body">
                    <h4 class="card-title text-center">Add Item on Chevals</h4>
                    <form action="" method="post">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Write Name of Item" required>
                        </div>
                        <div class="mb-1">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea type="description" name="description" id="description" class="form-control" placeholder="Write Name of Item" required></textarea>
                        </div>
                        <div class="mb-1">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="text" type="price" name="price" id="price" class="form-control" placeholder="Write The Price of Item" required>
                        </div>
                        <div class="mb-1">
                            <label for="picture" class="col-form-label">Picture</label>
                            <input type="text" name="picture" id="picture" class="form-control" placeholder="Write Picture Name of Item" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="col-form-label">Category</label>
                            <select class="form-select" name="category" id="category" required>
                                <option disabled selected>Select the Category</option>
                                <option value="Casual">Casual</option>
                                <option value="Canvas">Canvas</option>
                                <option value="Runshoes">Runshoes</option>
                                <option value="Sport">Sport</option>
                            </select>
                        </div>
                        <!-- Add & Back -->
                        <button type="submit" name="ubah" class="btn btn-primary">Add</button>
                        <a href="../php/admin.php" class="mx-3 text-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/jquery-3.5.1.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>