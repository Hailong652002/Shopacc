<?php session_start(); 
    if (!$_SESSION['userAdmin']) {
        header('location: http://localhost/shopacc.net/admin/main/login/login.php?locate=loginAdmin');
    }
?>



