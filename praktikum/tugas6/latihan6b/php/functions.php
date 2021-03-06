<?php
// Salsabila Febrianty NP
// 203040104
// Kamis08
// Modul06

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

    $query = "INSERT INTO shoes VALUES ('', 'picture', 'name', 'description', 'price', 'category')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Fungsi untuk menghapus data didalam database
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM shoes WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi untuk mengubah data didalam database
function ubah($data) {
    $conn = koneksi();

    $id_barang = htmlspecialchars($data['id_barang']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);
    $picture = htmlspecialchars($data['picture']);

    $query = "UPDATE shoes SET 
                picture = '$picture',
                name = '$name',
                description = '$description',
                price = '$price',
                category = '$category',
                WHERE id_barang = '$id_barang'
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>