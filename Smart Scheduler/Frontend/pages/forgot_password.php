<?php
// forgot_password.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!-- Panggil CSS utama -->
    <link rel="stylesheet" href="../style/style2.css">
</head>
<body>

<div class="form-wrapper">

    <!-- Tombol kembali -->
    <a href="login.php" class="btn-kembali"> < </a>

    <h1>Lupa Password</h1>
    <h2>Reset password akun kamu</h2>

    <form action="../../Backend/forgot_password_process.php" method="POST">

        <input 
            type="email" 
            name="email" 
            placeholder="Masukkan email terdaftar"
            required
        >

        <input 
            type="password" 
            name="new_password" 
            placeholder="Password baru"
            required
        >

        <input 
            type="password" 
            name="confirm_password" 
            placeholder="Konfirmasi password baru"
            required
        >

        <button type="submit">Reset Password</button>

        <p class="link-text" style="margin-top: 15px;">
            Sudah ingat password? <a href="login.php">Login di sini</a>
        </p>
    </form>

</div>

</body>
</html>
