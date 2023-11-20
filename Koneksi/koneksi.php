<?php
$server     = "localhost";
$username   =  "root";
$password   =  "";
$db         =  "wizz";
$koneksi    = mysqli_connect($server, $username, $password, $db);
//pastikan urutan pemanggilan variablenya sama
//untuk cek jika koneksi gagal ke database
if(mysqli_connect_errno()) {
    echo "koneksi gagal : ".mysql_connect_error();
}

?>
