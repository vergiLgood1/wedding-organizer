<?php
require ('../koneksi.php');
if(isset($_POST['register'])) {
    $userMail = $_POST['email'];
    $userPass = $_POST['password'];
    $userName = $_POST['reset password'];

    $query = "INSERT INTO admin VALUES ('', '$userName', '$userMail', '$userPass', 2)";
    $result = mysqli_query($koneksi, $query);
    header('Location: ../Login/login.php');
} 
?>