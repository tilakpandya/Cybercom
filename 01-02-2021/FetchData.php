<?php
require 'Connect.inc.php';

$query = "select name,username,password from a_table  order by id";

//$query_run = mysqli_query($query);

if ($query_run= mysqli_query($mysqli, $query) ) { /*$query_run=$mysqli->query($query)*/
    //echo 'Query success!';
    if (@mysqli_num_rows($query_run) == NULL) {
        echo "No result found";
    }else{
        while ($row = mysqli_fetch_assoc($query_run)) {
            echo '<br>'.$row["name"].' '.$row["username"].' '.$row["password"];
        }
    }
    

} else {
    die('Query not success!');
}
?>