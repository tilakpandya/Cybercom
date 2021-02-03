<?php
include "Connect.inc.php";

if (isset($_POST['search_name'])) {
    $search_name = $_POST['search_name'];
    if (!empty($search_name)) {
       
        $query = "select name from a_table where name LIKE '%". mysqli_real_escape_string($mysqli,$search_name)."%'";
        $query_run = mysqli_query($mysqli,$query);

        if(mysqli_num_rows($query_run)>=1){

            while ($query_row = mysqli_fetch_assoc($query_run)) {
                echo $query_row['name'].'<br>'; 
            }

        }else {
            echo"no data found";
        }
    } else {
        echo"fill the blank";
    }
    
}
?>

<form action="#" method="POST">
    Name: <input type="text" name="search_name">
    <input type="submit" value="search">
</form>