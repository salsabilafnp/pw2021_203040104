<?php
// Koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_tubes_203040104");

  return $conn;
}

// Query
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);
  // pembuatan array assoc
  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Upload
function upload()
{
  $nama_file = $_FILES['picture']['name'];
  $tipe_file = $_FILES['picture']['type'];
  $ukuran_file = $_FILES['picture']['size'];
  $error = $_FILES['picture']['error'];
  $tmp_file = $_FILES['picture']['tmp_name'];

  // cek tidak ada gambar dipilih
  if ($error == 4) {
    //echo "<script>
    //        alert('pilih gambar terlebih dahulu');
    //      </script>";
    return 'blank.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  // ambil ekstensi
  $ekstensi_file = strtolower(end($ekstensi_file));
  // cek ekstensi sesuai dengan daftar
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('File salah, silakan pilih ulang!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('File salah, silakan pilih ulang!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5Mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran file terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan, siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  // upload file ke folder img
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}

// Tambah
function tambah($data)
{
  $conn = koneksi();

  $name = htmlspecialchars($data['name']);
  $color = htmlspecialchars($data['color']);
  $stok = htmlspecialchars($data['stok']);
  $price = htmlspecialchars($data['price']);
  $category = htmlspecialchars($data['category']);
  //$picture = htmlspecialchars($data['picture']);

  // upload gambar
  $picture = upload();

  if (!$picture) {
    return false;
  }

  $query = "INSERT INTO cheval VALUES ('', '$picture', '$name', '$color', '$stok', '$price', '$category')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Hapus
function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $shoe = query("SELECT * FROM cheval WHERE id = $id");
  if ($shoe['picture'] != 'blank.png') {
    unlink('../assets/img/' . $shoe['picture']);
  }

  mysqli_query($conn, "DELETE FROM cheval WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// Ubah atau Edit
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $name = htmlspecialchars($data['name']);
  $color = htmlspecialchars($data['color']);
  $stok = htmlspecialchars($data['stok']);
  $price = htmlspecialchars($data['price']);
  $category = htmlspecialchars($data['category']);
  $picture_old = htmlspecialchars($data['picture_old']);

  $picture = upload();
  if (!$picture) {
    return false;
  }

  if ($picture == 'blank.png') {
    $picture = $picture_old;
  }

  $query = "UPDATE cheval SET 
              picture = '$picture',
              name = '$name',
              color = '$color',
              stok = '$stok',
              price = '$price',
              category = '$category'
              WHERE id = $id;";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM cheval
            WHERE name LIKE '%$keyword%' OR
            color LIKE '%$keyword%' OR
            price LIKE '%$keyword%' OR
            category LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Login
function login($data)
{
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      // arahkan ke index
      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

// Registrasi
function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // cek password1 dan password2
  if ($password1 != $password2) {
    echo "<script>
            alert('konfirmasi password salah!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username < 5 digit
  if (strlen($username) < 5) {
    echo "<script>
            alert('username terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password = password_hash($password1, PASSWORD_DEFAULT);
  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";

  mysqli_query($conn, $query_tambah) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
