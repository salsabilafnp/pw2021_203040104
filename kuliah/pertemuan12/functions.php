<?php
// koneksi
function koneksi()
{
  // koneksi ke DB & pilih database
  return mysqli_connect('localhost', 'root', '', 'pw_203040104');
}

// query
function query($query)
{
  $conn = koneksi();
  // perintah query
  $result = mysqli_query($conn, $query);
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

// tambah
function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  // query tambah
  $query = "INSERT INTO mahasiswa
            VALUES
            ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  // mengembalikan nilai
  return mysqli_affected_rows($conn);
}

// hapus
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// ubah
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  // query ubah
  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  // mengembalikan nilai
  return mysqli_affected_rows($conn);
}

// cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
            WHERE nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// login
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

// registrasi
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

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
