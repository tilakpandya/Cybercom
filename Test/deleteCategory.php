<?php
	// include 'header.php';
    include "sql/DataSource.php";
    if(isset($_POST['cid'])){
    
        $id=$_POST['cid'];
        
        $data = new DataSource();
        $status =  $data->DeleteCategory($id);
        $data->listCategory();
        
    }
?>