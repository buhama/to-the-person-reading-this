<?php 

if (isset($_POST["send"])){
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if (!empty($_POST['check_list'])){
        $ids = $_POST['ids'];
        $i = 0; 
        foreach ($_POST['check_list'] as $check){

            if ($check == "Approved"){
                $sql = "UPDATE quotes SET quoteApproved = '0' WHERE quotesId = $ids[$i]"; 
            }
            else if ($check == "Not Approved"){
                $sql = "UPDATE quotes SET quoteApproved = '1' WHERE quotesId = $ids[$i]";
            }
            else if ($check == "Delete"){
                $sql = "DELETE FROM quotes WHERE quotesId = $ids[$i]";
            }
            mysqli_query($conn, $sql);
            $i++;
        }
    }
    header ("Location: ../dashboard.php?update=success");
}
else {
    echo "something has gone horrible wrong";
}