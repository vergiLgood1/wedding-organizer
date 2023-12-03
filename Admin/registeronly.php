<?php 
if(!$_SESSION['username'])
{
    echo '<script>window.location.href = "/Project-wedding/Admin/login.php";</script>';
}

?>