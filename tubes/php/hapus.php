<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';
$id_barang = $_GET['id_barang'];

if (hapus($id_barang) > 0) {
    echo "<script>
                alert('Data Berhasil dihapus!');
                document.location.href = 'admin.php';
            </script>";
} else {
    echo "<script>
                alert('Data Gagal dihapus!');
                document.location.href = 'admin.php';
            </script>";
}

?>