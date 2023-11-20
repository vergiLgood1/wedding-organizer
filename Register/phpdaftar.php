<?php
require ('../Koneksi/koneksi.php');
if(isset($_POST['register'])) {
    $userMail = $_POST['Email'];
    $userPass = $_POST['Password'];
    $userName = $_POST['Username'];

    $query = "INSERT INTO user VALUES ('', '$userName', '$userMail', '$userPass', 2)";
    $result = mysqli_query($koneksi, $query);
    header('Location: ../Login/login.php');
} 
?>