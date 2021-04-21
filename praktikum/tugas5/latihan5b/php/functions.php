<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul04 - MySQL

// Koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040104");

    return $conn;
}

// Melakukan Query
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);
    $picture = htmlspecialchars($data['picture']);

    $query = "INSERT INTO mahasiswa VALUES ('', 'picture', 'name', 'description', 'price', 'category')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>