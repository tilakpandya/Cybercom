<?php

    if(isset($_POST['password']) && !empty($_POST['password'])){
            $pass=md5($_POST['password']);
        
            $filename = 'hash.txt';
            $handle = fopen($filename,'r');

            $data = fread($handle,filesize($filename));
            
            if ($data==$pass) {
               echo"Password is matched!";
            } else {
                echo"Password is not matched!";
            }
        

            fclose($handle);

        
     }else {
        echo"please enter password.";
        }    
    
?>

<html lang="en">
<head>
  <title>MD5 encryption</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

            <form action="#" method="POST">
                <input type="text" placeholder="password" name="password" class="form-control"><br>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>    
</body>
</html>