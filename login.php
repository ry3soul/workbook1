<?php

    error_reporting(E_ALL);
    ini_set("display_error", 1);

    $VAILD_EMAIL = "test@gmail.com";
    $VAILD_PASSWORD = "mypassword";

    $email   = $_POST['email'];
    $password = $_POST['password'];


    if (($VAILD_EMAIL == $email) && ($VAILD_PASSWORD == $password)) {
        correctlogin($Email);
    }else {
        incorrectlogin($Email);

    }

 
    function correctlogin ($email) {
        error_log("Login accepted for " . $email,0);
        header("location:home.php");
        exit();

    }

    function incorrectlogin ($email) {
        error_log("Login accepted for " . $email,0);
        header("location:home.php");
        exit();
    }
?>
