<?php

if(isset($_POST['oldname']) && isset($_POST['newname']) && isset($_POST['submit'])){
    $oldfilename = $_POST['oldname'];
    $newfilename = $_POST['newname'];
        
    if (!empty($_POST['oldname']) && !empty($_POST['newname'])) {

        if (@rename($oldfilename.'.txt',$newfilename.'.txt')) {
            echo"File Renamed...";
    
        }else{    

            echo "One of File Not Exist!";
        }
    }else {
       echo"Fill the blank";
    }
 }

?>
<html lang="en">
<head>
  <title>Delete File Handling</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <hr>
    <div class="container">
    <form action="#" method="POST">
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" name="oldname" placeholder="Old file name">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="newname" placeholder="New file name">
            </div><br>
            <input type="submit" name="submit" value="Rename" class="btn btn-primary">

        </div>
    </form>    
    </div>    
</body>
</html>