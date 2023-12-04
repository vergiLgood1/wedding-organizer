
        <?php
                                    
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
                echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                unset($_SESSION['status']);
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('../Admin/background.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.wrapper{
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1{
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder{
    color: #fff;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wrapper .lupa-password{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.lupa-password label input{
    accent-color: #fff;
    margin-right: 3px;
}

.lupa-password a{
    color: #fff;
    text-decoration: none;
}

.lupa-password a:hover {
    text-decoration: underline;
}

.wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrapper .register{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.register p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.register p a:hover {
    text-decoration: underline;
}
    </style>
    <form action="logincode.php" method="POST">
      <div class="wrapper">
        <h1>Login</h1>

        <div class="input-box">
            <input type="text" placeholder="Email" name="email_login"
            required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password_login"
            required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class="lupa-password">
            <label><input type="checkbox">Remember Me
            </label>
            <a href="../Admin/lupapass.php">Lupa Password?</a>
        </div>

        <button type="submit" class="btn" name="login_btn">Login</button>
        
        <div class="register">
            <p>Tidak Punya Akun? <a href="../Admin/Daftar.php">Daftar!</a></p>
        </div>

      </div>
    </form>
</body>
</html>