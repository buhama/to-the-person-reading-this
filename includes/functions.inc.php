<?php

function addQuote($conn, $quote, $author, $email, $theme){
    $sql = "INSERT INTO quotes (quoteQuotes, quoteAuthor, quoteEmail, quoteTheme) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?erorr=stmtfailed");
        exit();
    }

    $quote = '" '.$quote.' "';
    mysqli_stmt_bind_param($stmt,"ssss", $quote, $author, $email, $theme);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    if ($theme == "Words of Encouragement"){
        header("location: ../words-of-encouragement.php?error=none");
    }
    else if ($theme == "Lift a Friend"){
        header("location: ../lift-a-friend.php?error=none");
    }
    else if ($theme == "Be Kinder to Yourself"){
        header("location: ../be-kinder-to-yourself.php?error=none");
    }
    else if ($theme == "Something to be Grateful For"){
        header("location: ../something-to-be-grateful-for.php?error=none");
    }
    
    exit(); 
}

function emptyQuote($quote){
    $result; 

    if (empty($quote)){
        $result = true;
    }
    else{
        $result = false; 
    }

    return $result; 
}

function getRandomQuote ($conn){
  $sql = "SELECT * FROM quotes WHERE quoteApproved = 0 order by RAND() LIMIT 1";
  $result = mysqli_query($conn,$sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0){
    $row  = mysqli_fetch_assoc($result);
    return $row['quoteQuotes'];
    exit(); 
  }
}

function emptyInputLogin( $username, $pwd){
    $result; 
    
    if (empty ($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}

function loginUser ($conn, $username, $pwd){
    $usernameExists = usernameExists($conn, $username); 

    if ($usernameExists===false){
        header("location: ../index.php?error=wronglogin");
        exit();
    }

    $realPassword = $usernameExists["password"];

    if ($realPassword !== $pwd){
        header("location: ../index.php?error=wrongpassword");
        exit();
    }
    else if ($realPassword === $pwd){
        session_start();
        $_SESSION["username"] = $usernameExists["username"];
        header("location: ../dashboard.php");
        exit();
    }
}

function usernameExists($conn, $username){
    $sql = "SELECT * FROM users WHERE username = ?;"; 
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header ("location ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row; 
    }
    else{
        $result = false; 
        return $result; 
    }

    mysqli_stmt_close($stmt);
}

function displayQuotes ($data){
    $output = "<table"; 
    foreach ($data as $key => $var){
        if ($key===0){
            $output .= '<tr>'; 
            foreach ($var as $col => $val){
                $output .= "<td>" . $col . "</td>";
            }
        }
    }
}