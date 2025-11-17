<?php
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {

    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // VALIDASI KOSONG
    if ($email == "" || $password == "") {
        echo "<script>alert('Email dan password wajib diisi!'); window.location='../Frontend/pages/login.php';</script>";
        exit();
    }

    // CEK EMAIL
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    
    if (mysqli_num_rows($query) == 0) {
        echo "<script>alert('Email belum terdaftar!'); window.location='../Frontend/pages/login.php';</script>";
        exit();
    }

    $user = mysqli_fetch_assoc($query);

    // CEK PASSWORD
    if (!password_verify($password, $user['password'])) {
        echo "<script>alert('Password salah!'); window.location='../Frontend/pages/login.php';</script>";
        exit();
    }

    // LOGIN SUKSES → SIMPAN SESSION
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name']    = $user['name'];
    $_SESSION['email']   = $user['email'];

    echo "<script>alert('Login berhasil!'); window.location='../Frontend/pages/landing_page.php';</script>";
    exit();
}
?>



