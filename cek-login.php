<?php
include('koneksi.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username' AND password = '$password'");
    $cek = mysqli_num_rows($data);
    if ($cek > 0) {
        $_SESSION['user'] = mysqli_fetch_array($data);
        echo '<script>alert("Selamat datang, Login berhasil"); location.href="index.php";</script>';
    } else {

        echo '<script>alert("Maaf Username/Password Anda Salah!"); location.href="login.php";</script>';
    }
}
