<?php


if (isset($_FILES['file'])) {
    $name=$_FILES['file']['name'];
    $ext = strtolower(substr($name,strpos($name,'.')+1));

    $size=$_FILES['file']['size'];
    $max_size = 100000;

    $type=$_FILES['file']['type'];
    $tmp_name= $_FILES['file']['tmp_name'];
    //$error=$_FILES['file']['error'];
    if (!empty($name)) {

        if (($ext =='jpg' || $ext=='jpeg') && $type == 'image/jpeg' && $size<=$max_size) {
            $location = 'upload/';

            if (@move_uploaded_file($tmp_name,$location.$name)) {
                echo'Uploaded';
            }else{
                echo"There was an error.";
            }
        }else {
            echo"File must jpg/jpeg and be less than 2MB";
        }

    } else {
        echo"Please Choose a file";
    }
    
}
?>

<hr> 
<html lang="en">
<head>
  <title>Upload File Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"><br>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
        </form>
    </div>    
</body>
</html>