<?php
require ('../Koneksi/koneksi.php');
session_start();

if( isset($_POST['submit']) ){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    /*
    $emailCheck = mysqli_real_escape_string($koneksi, $email);
    $passCheck = mysqli_real_escape_string($koneksi, $pass);
    */

    if(!empty(trim($email)) && !empty(trim($pass))){
        //select data berdasarkan username dari database
        $query      = "SELECT * FROM user WHERE email = '$email'";
        $result     = mysqli_query($koneksi, $query);
        $num        = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['Id'];
            $userVal = $row['Email'];
            $passVal = $row['Password'];
            $level = $row['Level'];
        }
       if ($num != 0){
        if($userVal==$email && $passVal==$pass){
            //header('Location: home.php?user_fullname=' . urlencode($userName));
            $_SESSION['Id'] = $id;
            $_SESSION['Name'] = $userName;
            $_SESSION['Level'] = $level;
            header('Location: ../Front-end-wizz/home.php');
        }else {
            $error = 'username atau password salah!!';
            header('location: login.php');
        }
       }else{
        $error = 'User tidak ditemukan !!';
        header('location: login.php');
       } 
    }else{
        $error = 'Data tidak boleh kosong !!';
        echo $error;
    }
}
?>
