<?php
session_start();
include('Database/koneksi.php');

if($dbconfig)
{
    //echo "Database Terkoneksi";
}
else
{
    header("Location: Database/koneksi.php");
}

if(!$_SESSION['username'])
{
    header('Location: ../Admin/login.php');
}

?>