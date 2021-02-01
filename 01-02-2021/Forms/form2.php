<!DOCTYPE html>
<html>
  <head>
    <title>User Form</title>
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/form2.css"
    />
    <script src="js/form2.js"></script>
  </head>
  <body>
  <?php
      
      if (isset($_POST['submit']) && isset($_POST['marital']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['dob'])) {
        
        $marital = $_POST['marital'];
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $address = $_POST['address'];
        $game = $_POST['game'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        

        echo "You'r name : $name<br> password: $pass<br> Address: $address<br> Favourit game: $game
        <br> Gender : $gender <br> Date of Birth :$dob <br>Marital Status: $marital";
      
      }
    
    ?>
    <form action="#" method="POST" name="myForm">
      <fieldset>
        <legend>USER Form</legend>
        <table>
          <tr>
            <td>First Name</td>
            <td>
              <input type="text" name="name" id="name" />
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input type="password" name="password" id="password"/>
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" id="male" name="gender"  id="gender" value="male" />
              Male<br />
              <input type="radio" id="female" name="gender"  id="gender" value="female" />
              Female<br />
            </td>
          </tr>
          <tr>
            <td>Enter Address</td>
            <td>
              <textarea name="address" id="address" cols="22" rows="5"></textarea>
            </td>
          </tr>
          <tr>
            <td>D.O.B</td>
            <td>
              <input type="date" name="dob" id="dob" />
            </td>
          </tr>
          <tr>
            <td>Select games</td>
            <td>
            Hockey <input type="checkbox" value="Hockey" name="game" id="game"/> Football
            <input type="checkbox" value="Football" name="game" id="game"/> Cricket
            <input type="checkbox" value="Cricket" name="game" id="game"/>Badminton
            <input type="checkbox" value="Badminton" name="game" id="game"/> vollyball
            <input type="checkbox" value="vollyball" name="game" id="game"/>
          </td>
          </tr>
          <td>Marital Status</td>
          <td>
            <input type="radio" id="married" name="marital" value="married" />
            Unmarried
            <input
              type="radio"
              id="unmarried"
              name="marital"
              value="unmarried"
            />
            Married<br />
          </td>

          <tr>
            <td></td>
            <td>
              <input type="submit" name="submit" value="submit Form" onclick="validateForm()"/>
              <input type="reset" name="reset" value="Reset" />
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="checkbox" name="agrement" id="agrement" /> I accept this agrement
            </td>
          </tr>
        </table>
      </fieldset>
    </form>
  </body>
</html>
