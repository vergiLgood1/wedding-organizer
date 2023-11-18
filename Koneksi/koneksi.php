
<?php
$server     = "localhost";
$username   =  "root";
$password   =  "";
$db         =  "wedding_organizer";
$connection    = mysqli_connect($server, $username, $password);
//pastikan urutan pemanggilan variablenya sama
//untuk cek jika koneksi gagal ke database
$dbconfig = mysqli_select_db($connection, $db);
if($dbconfig) 
{
    //echo "Koneksi Database Berhasil";
}
else
{
    echo "gagal";
}8

?>
