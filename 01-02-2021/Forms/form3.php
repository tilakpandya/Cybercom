<!DOCTYPE html>
<html>
  <head>
    <title>User Form</title>
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/form1.css"
    />
    <script src="js/form3.js"></script>
  </head>
  <body>
  <?php
      
      if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dob']) 
      && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email']) 
      && isset($_POST['number']) && isset($_POST['password']) && isset($_POST['agrement'])) {
        
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $pass = $_POST['password'];
        $lname = $_POST['lname'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $number = $_POST['number'];
        

        echo "You'r name : $fname $lname<br> password: $pass<br> Country: $country<br> Phone number: $number
        <br> Gender : $gender <br> Date of Birth :$dob <br>Email : $email";
      
      }
    
    ?>
    <form action="#" method="POST" name="myForm">
      Sign Up
      <table>
        <tr>
          <td>First Name</td>
          <td>
            <input type="text" name="fname" id="fname"/>
          </td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td>
            <input type="text" name="lname" id="lname"/>
          </td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td>
            <input type="date" name="dob" id="dob"/>
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" id="gender" name="gender" value="male" />
            Male<br />
            <input type="radio" id="gender" name="gender" value="female" />
            Female<br />
          </td>
        </tr>
        <tr>
          <td>Country</td>
          <td>
            <select name="country" id="country">
              <option>country</option>
              <option>India</option>
              <option>England</option>
              <option>America</option>
              <option>Japan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td>
            <input type="email" name="email" id="email"/>
          </td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>
            <input type="number" name="number" id="number"/>
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
            <input type="password" name="password" id="password"/>
          </td>
        </tr>

        <tr>
          <td>Confirm Password</td>
          <td>
            <input type="password" name="confpassword" id="confpassword"/>
          </td>
        </tr>

        <tr>
          <td></td>
          <td>
            <input type="checkbox" name="agrement" id="agrement"/> I accept this agrement
          </td>
        </tr>

        <tr>
          <td></td>
          <td>
            <input type="submit" name="submit" value="submit" onclick="validateForm()" />
            <input type="reset" name="reset" value="Reset" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
