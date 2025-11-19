<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Smart Scheduler</title>
  <link rel="stylesheet" href="../style/style2.css">
</head>

<body>

<div class="form-wrapper">
    <a href="landing_page.php" class="btn-kembali"> < </a>
    <h1>Smart Scheduler</h1>
    <h2>LOGIN</h2>

    <form action="../../Backend/login_process.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <div class="forgot">
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" name="login">Login</button>

        <div class="link-text">
            Don't have an account? <a href="register.php">Sign Up</a>
        </div>
    </form>
</div>

</body>
</html>




