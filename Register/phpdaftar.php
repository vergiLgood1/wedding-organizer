<?php
include('../Admin/security.php');
if(isset($_POST['register'])) {
    $userMail = $_POST['email'];
    $userPass = $_POST['password'];
    $userName = $_POST['username'];

    $query = "INSERT INTO register VALUES ('', '$userName', '$userMail', '$userPass', 'user')";
    $result = mysqli_query($connection, $query);
    header('Location: ../Login/login.php');
} 
?>