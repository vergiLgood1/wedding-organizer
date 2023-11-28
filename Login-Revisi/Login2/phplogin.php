<?php
require ('../koneksi.php');
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
        $query      = "SELECT * FROM admin WHERE email = '$email'";
        $result     = mysqli_query($koneksi, $query);
        $num        = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $userVal = $row['email'];
            $passVal = $row['password'];
            $level = $row['level'];
        }
       if ($num != 0){
        if($userVal==$email && $passVal==$pass){
            //header('Location: home.php?user_fullname=' . urlencode($userName));
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $userName;
            $_SESSION['level'] = $level;
            header('Location: ../index.html');
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
