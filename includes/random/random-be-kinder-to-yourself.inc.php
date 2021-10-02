<?php

include_once '../dbh.inc.php';


$sql = "SELECT * FROM quotes WHERE quoteApproved = 0 AND quoteTheme = 'Be Kinder to Yourself' order by RAND() LIMIT 1";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    $row  = mysqli_fetch_assoc($result);
    echo $row['quoteQuotes'];
    echo '<p>';
    if ($row['quoteAuthor'] == ""){
        echo '- Anonymous'; 
    }
    else {
        echo '-'.$row['quoteAuthor'];
    }
    echo '</p>';
}