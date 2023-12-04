<?php 
if($_SESSION['level'] == "user"){
    echo '<script>window.location.href = "../Admin/Error404.php";</script>';
}
?>