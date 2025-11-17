<?php
// 1. Import file koneksi
include "koneksi.php";

// 2. Ambil data form
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];

// 3. Validasi input
if (empty($name) || empty($email) || empty($password)) {
    echo "<script>alert('Semua field harus diisi!'); window.history.back();</script>";
    exit;
}

// 4. Validasi format email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Format email tidak valid!'); window.history.back();</script>";
    exit;
}

// 5. Cek email sudah terdaftar atau belum
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Email sudah digunakan!'); window.history.back();</script>";
    exit;
}

// 6. Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 7. Simpan data ke database
$insert = $conn->prepare("
    INSERT INTO users (name, email, password, created_at)
    VALUES (?, ?, ?, NOW())
");
$insert->bind_param("sss", $name, $email, $hashedPassword);

if ($insert->execute()) {
    echo "<script>alert('Pendaftaran Berhasil!'); window.location='../Frontend/pages/login.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
