<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "wizzard";

// Membuat koneksi
$koneksi = mysqli_connect($server, $username, $password, $db);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Jika koneksi berhasil, Anda dapat melanjutkan dengan operasi database lainnya

?>
