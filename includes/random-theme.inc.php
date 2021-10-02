<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$rand_link = rand (1,4);

if ($rand_link == 1){
    header("Location: ../words-of-encouragement.php"); 
}
else if ($rand_link == 2){
    header("Location: ../lift-a-friend.php");
}
else if ($rand_link == 3){
    header("Location: ../something-to-be-grateful-for.php");
}
else if ($rand_link == 4){
    header("Location: ../be-kinder-to-yourself.php");
}