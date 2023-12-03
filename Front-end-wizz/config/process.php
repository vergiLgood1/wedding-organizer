<?php
require ('config/koneksi.php');
if(isset($_POST['register'])) {
    $userMail = $_POST['email'];
    $userPass = $_POST['password'];
    $userName = $_POST['username'];

    $query = "INSERT INTO user VALUES ('', '$userName', '$userMail', '$userPass', 2)";
    $result = mysqli_query($koneksi, $query);
    header('Location: ../Login/login.php');
} 


?>

<?php
require('config/koneksi.php');
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    /*
    $emailCheck = mysqli_real_escape_string($koneksi, $email);
    $passCheck = mysqli_real_escape_string($koneksi, $pass);
    */

    if (!empty(trim($email)) && !empty(trim($pass))) {
        //select data berdasarkan username dari database
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $userVal = $row['email'];
            $passVal = $row['password'];
            $level = $row['level'];
        }
        if ($num != 0) {
            if ($userVal == $email && $passVal == $pass) {
                //header('Location: home.php?user_fullname=' . urlencode($userName));
                $_SESSION['Id'] = $id;
                $_SESSION['Name'] = $userName;
                $_SESSION['Level'] = $level;
                header('Location: ../Front-end-wizz/home.php');
            } else {
                $error = 'username atau password salah!!';
                header('location: login.php');
            }
        } else {
            $error = 'User tidak ditemukan !!';
            header('location: login.php');
        }
    } else {
        $error = 'Data tidak boleh kosong !!';
        echo $error;
    }
}
?>

<?php

require('../Admin/security.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomor_kontak = $_POST["nomor"];
    $pesan = $_POST["pesan"];

    // Kirim email (sesuaikan dengan konfigurasi server Anda)
    $to = "diyoanggara149@gmail.com"; // Ganti dengan alamat email admin
    $subject = "Pesan dari Form Kontak";
    $message = "Nama: $nama\nEmail: $email\nNomor Kontak: $nomor_kontak\nPesan: $pesan";

    mail($to, $subject, $message);

    // Simpan data ke dalam database (jika diperlukan)
    // Pastikan koneksi ke database sudah dilakukan sebelumnya

    // Ganti nilai-nilai berikut sesuai dengan pengaturan database Anda
    $hostname = "localhost";
    $username = "username";
    $password = "password";
    $database = "nama_database";

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if (!$connection) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    // Simpan data ke dalam database
    mysqli_query($connection, "INSERT INTO kontak_saya (nama, email, nomor_kontak, pesan) VALUES ('$nama', '$email', '$nomor_kontak', '$pesan')");

    // Tutup koneksi database
    mysqli_close($connection);

    // Redirect atau kirim respons ke formulir
    header("Location: home.php?status=sukses");
    exit();
} else {
    header("Location: home.php");
    exit();
}
?>
