<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_weddingfix';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}

echo 'Koneksi Berhasil!';
?>
