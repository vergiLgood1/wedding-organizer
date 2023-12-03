<?php

include('../Admin/security.php');

ini_set("SMTP", "localhost");
ini_set("smtp_port", 25);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomor_kontak = $_POST["nomor"];
    $pesan = $_POST["pesan"];

    // Kirim email (sesuaikan dengan konfigurasi server Anda)
    $mailheader = "From:".$nama."<".$email.">\r\n";

    $recipient = "diyoanggara149@gmail.com";

    mail($recipient, $nomor_kontak, $pesan,$mailheader) or die("Error!");

    echo'

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';

    // Simpan data ke dalam database (jika diperlukan)
    // Pastikan koneksi ke database sudah dilakukan sebelumnya

    // Ganti nilai-nilai berikut sesuai dengan pengaturan database Anda
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "wedding-organizer";

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
