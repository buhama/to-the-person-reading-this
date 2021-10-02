<?php

if (isset($_POST["send"])){
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $quote = mysqli_real_escape_string($conn,$_POST["quote"]);
    $author = mysqli_real_escape_string($conn,$_POST["author"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $theme = "Something to be Grateful For";

    

    if (emptyQuote($quote) !== false){
        header("location: ..something-to-be-grateful-for.php?error=noquote");
        exit(); 
    }
    else {
        addQuote($conn, $quote, $author, $email, $theme);
    }
}
else{
    header("location: ../index.php?error=youlost");
    exit(); 
}