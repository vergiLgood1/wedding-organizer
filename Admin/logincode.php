<?php
include('security.php');


if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email1'];
    $password_login = $_POST['password1'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
    $usertype = mysqli_fetch_array($query_run);

    if($usertype['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Front-end-wizz/index.html');
    }
    else if($usertype['usertype'] == "user")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Front-end-wizz/index.html');
    }
    else
    {
        $_SESSION['status'] = "Email id atau Password salah";
        header('Location: login.php');
    }
    

}


?>