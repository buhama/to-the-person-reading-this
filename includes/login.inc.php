<?php

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false){
        exit();
    }
    loginuser($conn, $username, $pwd);
}
else{
    header ("location: ../index.php");
    exit();
}