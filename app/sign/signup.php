<?php

        // Errors on
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

    require_once '../PDO/connect.php';

    $name = trim($_POST['name']);
    $pass = trim($_POST['pass']);
    $pass2 = trim($_POST['pass2']);
    $email = trim($_POST['email']);

    if(!empty($name) && !empty($pass) && !empty($pass2) && !empty($email)) {
        echo $name;
    }else{
        echo 'Zapolnite vse polya!';
    }