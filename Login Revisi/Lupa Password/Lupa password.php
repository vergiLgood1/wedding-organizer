<?php
require('phplupapassword.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <form action="Lupa password.php" method="POST">
      <div class="wrapper">
        <h1>Lupa Password</h1>
        <div class="input-box">
            <input type="text" placeholder="Email" name="email"
            required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password"
            required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Reset Password" name="reset password"
            required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class = "tombol-submit">
        
        <a href=""><button type="submit" class="btn2" name="register">Confirm</button></a>
        </div>
      </div>
    </form>
</body>
</html>