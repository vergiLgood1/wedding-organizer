<!-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> -->
<?php
$server     = "localhost";
$username   =  "root";
$password   =  "";
$db         =  "db_weddingfix";
$connection    = mysqli_connect($server, $username, $password);
//pastikan urutan pemanggilan variablenya sama
//untuk cek jika koneksi gagal ke database
$dbconfig = mysqli_select_db($connection, $db);
if($dbconfig) 
{
   // echo "Koneksi Database Berhasil";
}
else
{
    echo "Koneksi Database Gagal";
}

?>
