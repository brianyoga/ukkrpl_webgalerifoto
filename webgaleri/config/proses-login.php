<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

if (!$sql) {
    // Kueri gagal dieksekusi
    die("Error: " . mysqli_error($koneksi));
}

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    // Kredensial pengguna benar
    $data = mysqli_fetch_array($sql);
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('login berhasil');
    location.href='../admin/index.php';
    </script>";
} else {
    // Kredensial pengguna salah
    echo "<script>
    alert('username atau password salah!');
    location.href='../login.php';
    </script>";
}
?>