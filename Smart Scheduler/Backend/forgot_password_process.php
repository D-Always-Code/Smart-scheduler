<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        echo "<script>alert('Password konfirmasi tidak cocok'); window.location='../Frontend/pages/forgot_password.php';</script>";
        exit();
    }

    // cek apakah email terdaftar
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) == 0) {
        echo "<script>alert('Email tidak ditemukan'); window.location='../Frontend/pages/forgot_password.php';</script>";
        exit();
    }

    // update password
    $hashed = password_hash($new_password, PASSWORD_DEFAULT);

    $update = mysqli_query($conn, "UPDATE users SET password='$hashed' WHERE email='$email'");

    if ($update) {
        echo "<script>alert('Password berhasil direset, silakan login'); window.location='../Frontend/pages/login.php';</script>";
    } else {
        echo "<script>alert('Gagal reset password'); window.location='../Frontend/pages/forgot_password.php';</script>";
    }
}
?>
