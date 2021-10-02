<?php

if (isset($_POST["send"])){
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $theme = mysqli_real_escape_string($conn,$_POST["theme"]);
    $quote = mysqli_real_escape_string($conn,$_POST["quote"]);
    $author = mysqli_real_escape_string($conn,$_POST["author"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    
    if (emptyQuote($quote) !== false){
        header("location: ../index.php?error=noquote");
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