<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Smart Scheduler</title>
  <link rel="stylesheet" href="../style/style2.css">
</head>
<body>

<div class="form-wrapper">
    <a href="landing_page.php" class="btn-kembali"> < </a>

    <h1>Smart Scheduler</h1>
    <h2>SIGN UP</h2>

    <form action="../../Backend/register_process.php" method="POST">
        <input type="text" name="name" placeholder="Fullname" required> <br>
        <input type="email" name="email" placeholder="Email" required> <br>
        <input type="password" name="password" placeholder="Password" required> <br>      
        <button type="submit">Register</button>

        <div class="link-text">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </form>
</div>


</body>
</html>