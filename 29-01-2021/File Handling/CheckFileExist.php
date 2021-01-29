<?php
 
 if(isset($_POST['name'])){
    $filename = $_POST['name'];
    if (file_exists($filename)) {
        echo"File already exist.";

    }else{    
        $handle = fopen($filename,'w');

        fwrite($handle,"$filename created\n");
        
        fclose($handle);
        
        echo "File Created!";
    }
 }

?>

<html lang="en">
<head>
  <title>Append File Handling</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <hr>
    <div class="container">

            <form action="#" method="POST">
                <input type="text" placeholder="File name" name="name" class="form-control"><br>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>    
</body>
</html>