<?php
require('phplupapass.php');
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
    <form id="lupaForm" action="phplupapass.php" method="POST">
        <div class="wrapper">
            <h1>Lupa Password</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="password2" required>
                <i class='bx bxs-lock-alt' ></i> 
            </div>
            <div class="tombol-submit">
                <a href="../Login/login.php">Kembali</a>
            </div>
            <div>
                <button type="submit" class="btn2" name="lupabtn">Konfirmasi</button>
            </div>
        </div>
    </form>
</body>
</html>