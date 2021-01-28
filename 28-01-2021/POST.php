<?php

if(isset($_POST['fname']) && isset($_POST['lname'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (!empty($fname) && !empty($lname)) {
       echo "My name is $fname $lname";
    }
    else {
        echo "Please fill the blank field!";
    }
}
?>
<hr>
<html lang="en">
<head>
  <title>POST Method Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

            <form action="POST.php" method="POST">
                <input type="text" placeholder="First name" name="fname" class="form-control"><br>
                <input type="text" placeholder="Last name" name="lname" class="form-control"><br>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>    
</body>
</html>