<?php
require ('phplogin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <form action="login.php" method="POST">
      <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Email" name="email"
            required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password"
            required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class="lupa-password">
            <label><input type="checkbox">Remember Me
            </label>
            <a href="../Lupa-Password2/Lupa password.php">Lupa Password?</a>
        </div>

        <button type="submit" class="btn" name="submit">Login</button>
        
        <div class="register">
            <p>Tidak Punya Akun? <a href="../Register2/Daftar.php">Daftar!</a></p>
        </div>

      </div>
    </form>
</body>
</html>