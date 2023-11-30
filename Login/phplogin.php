<?php
include('../Admin/security.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
    $usertype = mysqli_fetch_array($query_run);

    if($usertype['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Admin/index.php');
    }
    else if($usertype['usertype'] == "user")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Front-end-wizz/index.php');
    }
    else
    {
        $_SESSION['status'] = "Email id atau Password salah";
        header('Location: login.php');
    }
    

}



// if( isset($_POST['submit']) ){
//     $email = $_POST['email'];
//     $pass = $_POST['password'];

    /*
    $emailCheck = mysqli_real_escape_string($koneksi, $email);
    $passCheck = mysqli_real_escape_string($koneksi, $pass);
    */

//     if(!empty(trim($email)) && !empty(trim($pass))){
//         //select data berdasarkan username dari database
//         $query      = "SELECT * FROM customer WHERE email = '$email'";
//         $result     = mysqli_query($koneksi, $query);
//         $num        = mysqli_num_rows($result);

//         while ($row = mysqli_fetch_array($result)) {
//             $id = $row['id'];
//             $userVal = $row['email'];
//             $passVal = $row['password'];
//             $level = $row['level'];
//         }
//        if ($num != 0){
//         if($userVal==$email && $passVal==$pass){
//             //header('Location: home.php?user_fullname=' . urlencode($userName));
//             $_SESSION['id'] = $id;
//             $_SESSION['name'] = $userName;
//             $_SESSION['level'] = $level;
//             header('Location: ../index.html');
//         }else {
//             $error = 'username atau password salah!!';
//             header('location: login.php');
//         }
//        }else{
//         $error = 'User tidak ditemukan !!';
//         header('location: login.php');
//        } 
//     }else{
//         $error = 'Data tidak boleh kosong !!';
//         echo $error;
//     }
// }
?>
