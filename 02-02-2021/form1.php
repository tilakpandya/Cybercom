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
      <br />
      <form action="#" method="POST" name="myForm">
        <div class="form-group">
          <table border="1" class="table table-bordered" id="user-form">
            <tr>
              <th colspan="2" class="warning">
                <h1 class="text-danger" align="center">User Form</h1>
              </th>
            </tr>
            <tr class="info">
              <td>Enter Name</td>
              <td>
                <input type="text" name="name" id="name" class="form-control" />
              </td>
            </tr>
            <tr class="info">
              <td>Enter Email ID</td>
              <td>
                <input type="email" name="email" id="email" class="form-control" />
              </td>
            </tr>
            <tr class="info">
              <td>Enter Password</td>
              <td>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  minlength="5" 
                  maxlength="15"
                />
              </td>
            </tr>
            <tr class="info">
              <td>Enter confirm Password</td>
              <td>
                <input
                  type="password"
                  name="confpassword"
                  id="confpassword"
                  class="form-control"
                  minlength="5" 
                  maxlength="15"
                />
              </td>
            </tr>
            <tr class="info">
              <td>Enter Address</td>
              <td>
                <textarea
                  name="address"
                  cols="22"
                  rows="5"
                  id="address"
                  class="form-control"
                ></textarea>
              </td>
            </tr>
            <tr class="info">
              <td>Select games</td>
              <td>
              <div class="form-check">
               
                <input type="checkbox" class="form-check-input" value="Hockey" name="game[]" id="game" /> Hockey
                <br />
               <input type="checkbox" class="form-check-input" value="Football" name="game[]" id="game" /> Football
                <br />
                <input type="checkbox"  class="form-check-input" value="Cricket" name="game[]" id="game" /> Cricket
                <br/>
                 <input type="checkbox" value="vollyball" name="game[]" id="game"/> vollyball
                </div>
              </td>
            </tr>
            <tr class="info">
              <td>Gender</td>
              <td>
                <input
                  type="radio"
                  id="male"
                  name="gender"
                  value="male"
                  id="gender"
                />
                Male<br />
                <input
                  type="radio"
                  id="female"
                  name="gender"
                  value="female"
                  id="gender"
                />
                Female<br />
              </td>
            </tr>
            <tr class="info">
              <td>Select age</td>
              <td>
                <select name="age" id="age"  class="form-control">
                  <option>Select</option>
                  <option value="1-10" >1-10</option>
                  <option value="11-20">11-20</option>
                  <option value="21-30">21-30</option>
                  <option value="31-40">30-40</option>
                </select>
                
              </td>
            </tr>
            <tr class="info">
              <td colspan="2" align=center>
                <input type="file" name="file" id="File" class="form-control"/>
              </td>
            </tr>
            <tr class="info" align=right>
              <td colspan="2">
                <input
                  type="submit"
                  name="submit"
                  class="btn btn-primary btn-lg"
                  value="submit Form"
                  onclick="validation() "
                />
                <input
                  type="reset"
                  name="reset"
                  class="btn btn-danger btn-lg"
                  value="Reset"
                />
              </td>
            </tr>
          </table>
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

        $mysqli->close();
          echo "<br><br>You'r name : $name<br>
          password: $pass<br />
          Address: $address<br />
          Favourit game: $game <br />
          Gender : $gender <br />
          Age :$age"; 

          } 
        } 
        
        
      ?>
        </div>
      </form>
    </div>
  </body>
</html>
