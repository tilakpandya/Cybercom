<!DOCTYPE html>
<html>
  <head>
    <title>User Form</title>
    <style>
      form {
        margin: 10px 250px;
    }
    </style>
    <script src="js/validation.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
<?php

include"Connect.inc.php";

      if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['password']) 
      && isset($_POST['confpassword'])&& isset($_POST['address']) && isset($_POST['game']) 
      && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['email'])) {
        
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $confpass = $_POST['confpassword'];
        $address = $_POST['address'];
        $game = $_POST['game'];
        $game = implode(", ",$game);
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        
        if (!empty($name) && !empty($pass) && !empty($confpass) && !empty($address)
        && !empty($game) && !empty($gender) && !empty($age) && $age !='Select' 
        && !empty($email) && $pass==$confpass) {
        
            $sql = "INSERT INTO `user`(`name`, `email`, `password`, `address`, `confpassword`, `game`, `gender`, `age`) 
                  VALUES ('$name','$email','$pass','$address','$confpass','$game','$gender','$age')"; 

            if (mysqli_query($mysqli,$sql)) {
               
               echo "New record created successfully"; 
            } else {
              echo "Error: " . $sql . "<br>" . $mysqli->error;
            }

          } 
        } 
         
  
    $query = "select `name`, `email`, `password`, `address`, `confpassword`, `game`, `gender`, `age` from user";

    if ($query_run= mysqli_query($mysqli, $query) ) {
      if (@mysqli_num_rows($query_run) == NULL) {
          echo "No result found";
      }else{
        echo'<table class="table table-sm" >';
        echo"<tr>";
            echo"<th>Name</th>";
            echo"<th>Email</th>";
            echo"<th>Password</th>";
            echo"<th>Address</th>";
            echo"<th>Game</th>";
            echo"<th>Gender</th>";
            echo"<th>Age</th>";
            
        echo"</tr>";
        while ($row = mysqli_fetch_assoc($query_run)) {
          echo'<tr>';
            echo'<td>'.$row["name"].'</td>';
            echo'<td>'.$row["email"].'</td>';
            echo'<td>'.$row["password"].'</td>';
            echo'<td>'.$row["address"].'</td>';
            echo'<td>'.$row["game"].'</td>';
            echo'<td>'.$row["gender"].'</td>';
            echo'<td>'.$row["age"].'</td>';
          echo"</tr>";
        }
        echo"</table>";
    }
    
  } else {
    die('Query not success!');
}
$mysqli->close();  

?>
</div>
  </body>
</html>