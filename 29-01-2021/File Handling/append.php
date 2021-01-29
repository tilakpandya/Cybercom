<?php
 
 if(isset($_POST['name'])){
    $name = $_POST['name'];
    if (!empty($name)) {
        $handle = fopen('name.txt','a');

        fwrite($handle,"$name\n");
        
        fclose($handle);
        
        echo "Written";
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
    <div class="container">

            <form action="#" method="POST">
                <input type="text" placeholder="First name" name="name" class="form-control"><br>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>    
</body>
</html>