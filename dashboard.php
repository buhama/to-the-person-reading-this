<?php 
    include_once 'header.php';
    include_once 'includes/functions.inc.php';
    include_once 'includes/dbh.inc.php';
?>
<body>
    <div class="dashboard">
        <div class="dashboard-heading">
            <?php
                    if (!isset($_SESSION["username"])){
                        header ("location: index.php");
                    }
                    else {
                        echo "<h1>Hello there  " . $_SESSION["username"] . " </h1>";
                    }
            ?>
            <p>You can use this dashboard to Approve, Not Approve or Delete quotes that have been submitted to
                the website. 
            </p>
            <p>
                Use the Filter drop down to filter by theme and click on each heading to sort alphabetically. 
            </p>
            <p>
                Right now your changes only update when you click the big EDIT button at the bottom 
                of the table. 
            </p>
            <hr>
            <p style="margin-bottom:3px;"> <i>THEME FILTER</i> </p>
            <select id="myInput" class="filter" onchange="myFunction()">
                <option value="Show All"> Show All </option>; 
                <option value="Words of Encouragement"> Words of Encouragement </option>;
                <option value="Lift a Friend"> Lift a Friend </option>;
                <option value="Be Kinder to Yourself"> Be Kinder to Yourself </option>;
                <option value="Something to be Grateful For"> Something to be Grateful For </option>;
            </select>
            
        </div>
        <form action="includes/dashboard.inc.php" method="POST">
            <?php
            $sql = "SELECT * FROM quotes;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result); 

            if ($resultCheck > 0){
                $output = '<table id = "myTable">';
                $output .= '<tr>';

                $output .= '<th onclick="sortTable(0)"> Approval ↑↓ </th> 
                <th onclick="sortTable(1)"> Unique Id ↑↓</th> 
                <th onclick="sortTable(2)"> Quote ↑↓</th> 
                <th onclick="sortTable(3)"> Author ↑↓</th> 
                <th onclick="sortTable(4)"> Email ↑↓</th> 
                <th onclick="sortTable(5)"> Theme ↑↓</th> 

                </tr>';
                $output .= '<tbody>'; 
                foreach ($result as $key => $var){
                    $output .= '<tr>'; 
                    
                    $approved;
                    $notApproved;
                    if ($var["quoteApproved"] == 1){
                        $approved = "";
                        $notApproved = "selected";
                        $class = "notApproved";
                    }
                    else if ($var["quoteApproved"] == 0) {
                        $approved = "selected"; 
                        $notApproved = "";
                        $class = "approved";
                    }
                    $output .= '<td class="'.$class.'"> <select name ="check_list[]" id="approved">'; 
                    $output .= '<option value="Approved" '.$approved.'> Approved </option>';
                    $output .= '<option value="Not Approved" '.$notApproved.'> Not Approved </option>';
                    $output .= '<option value="Delete"> Delete </option>';
                    $output .= '</select></td>';
                    foreach ($var as $k => $v){
                       if ($k == "quotesId"){
                            $output .= '<td class="'.$class.'"> <input type="text" name="ids[]" value = "'.$var["quotesId"].'" readonly></td>';
                        }
                        else if ($k != "quoteApproved") {
                            $output .= '<td class="'.$class.'">' . $v . '</td>';
                        }
                    }
                    $output .= '</tr>';
                }
                $output .= '</tbody>';
                $output .= '</table>';
                echo $output; 
            }
            ?>

            <input type='submit' name='send' value='Edit'>
        </form>
    </div>
    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable");
            switching = true;
            //Set the sorting direction to ascending:
            dir = "asc"; 
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch= true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    //Each time a switch is done, increase this count by 1:
                    switchcount ++;      
                } else {
                    /*If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again.*/
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            if (filter == "SHOW ALL"){
                filter = "";
            }

            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
            
        }
    </script>
</body>

