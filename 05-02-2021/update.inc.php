<?php
//echo"Something";
if (isset($_POST['text'])) {
    $search_text = $_POST['search_text'];
}
if (!empty($search_text)) {

    if (@$conn = mysqli_connect('localhost', 'root', '', 'test')) {
        //echo "Ok";
        $query = "SELECT `firstname` from `user6` where `firstname` LIKE '%" . $search_text . "%'";
        $query_run = mysqli_query($conn, $query);
        while ($query_row = mysqli_fetch_assoc($query_run)) {
            echo $name = $query_row['firstname'] . '<br>';
        }
    }
}
