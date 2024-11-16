<?php
include('koneksi.php');
if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $password = MD5($_POST['password']);

    $insert = mysqli_query($koneksi, "INSERT INTO user (nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

    if ($insert) {
        echo '<script>alert("Selamat, Register berhasil. Silahkan login"); location.href="login.php";</script>';
    } else {
        echo '<script>alert("Register Gagal, Silahkan ulangi kembali.")</script>';
    }
}
