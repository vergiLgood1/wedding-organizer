<?php
include('security.php');


if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email_login'];
    $password_login = $_POST['password_login'];

    $query = "SELECT * FROM user WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
    $usertype = mysqli_fetch_array($query_run);

    if($usertype['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        $_SESSION['level'] = 'admin';
        header('Location: ../Admin/index.php');
    }
    else if($usertype['usertype'] == "user")
    {
        $_SESSION['username'] = $email_login;
        $_SESSION['level'] = 'user';
        header('Location: ../Front-end-wizz/home.php');
    }
    else
    {
        $_SESSION['status'] = "Email id atau Password salah";
        header('Location: login.php');
    }
    
}

?>