<?php
include('../Admin/security.php');

if (isset($_POST['lupabtn'])) {
    $userMail = $_POST['email'];
    $userPass = $_POST['password'];
    $userPass2 = $_POST['password2'];

    if ($userPass === $userPass2) {
        $query = "UPDATE register set password='$userPass' WHERE email='$userMail'";
        $result = mysqli_query($connection, $query);
        header('Location: ../Login/login.php');
    }
}
?>