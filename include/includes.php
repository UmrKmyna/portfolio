<?php
    if (basename($_SERVER['PHP_SELF']) !== 'login.php') {
        include "login_validation.php";
        include "bootstrap.php";
        include "head.php";
    }else{
        include "bootstrap.php";
        echo '<link rel="stylesheet" href="\assets\css\login.css">';
    }
?>