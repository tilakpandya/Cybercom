<?php
 
 if(isset($_POST['name'])){
    $filename = $_POST['name'];
    if (isset($_POST['submit'])) {

        if (@unlink($filename)) {
            echo"File Deleted...";
    
        }else{    

            echo "File Not Exist!";
        }
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
                <input type="text" placeholder="File name" name="name" class="form-control"><br>
                <input type="submit" name="submit" value="Delete" class="btn btn-primary">
        </form>
    </div>    
</body>
</html>