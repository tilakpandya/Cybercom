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
    <script src="js/form1.js"></script>
  </head>
  <body>
    <form action="#" method="POST" name="myForm" >
      <table border="1">
        <tr>
          <td colspan="2">
            <h1>User Form</h1>
          </td>
        </tr>
        <tr>
          <td>Enter Name</td>
          <td>
            <input type="text" name="name" id="name"/>
          </td>
        </tr>
        <tr>
          <td>Enter Password</td>
          <td>
            <input type="password" name="password" id="password"/>
          </td>
        </tr>
        <tr>
          <td>Enter Address</td>
          <td>
            <textarea name="address" cols="22" rows="5" id="address"></textarea>
          </td>
        </tr>
        <tr>
          <td>Select games</td>
          <td>
            Hockey <input type="checkbox" value="Hockey" name="game" id="game"/> <br />Football
            <input type="checkbox" value="Football" name="game" id="game"/> <br />Cricket
            <input type="checkbox" value="Cricket" name="game" id="game"/> <br />Badminton
            <input type="checkbox" value="Badminton" name="game" id="game"/> <br />vollyball
            <input type="checkbox" value="vollyball" name="game" id="game"/>
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" id="male" name="gender" value="male" id="gender" />
            Male<br />
            <input type="radio" id="female" name="gender" value="female" id="gender" />
            Female<br />
          </td>
        </tr>
        <tr>
          <td>Select age</td>
          <td>
            <select name="age" id="age" >
              <option>Select</option>
              <option value=1-10>1-10</option>
              <option value=11-20>11-20</option>
              <option value=21-30>21-30</option>
              <option value=31-40>30-40</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="file" name="fileToUpload" id="uploadFile" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="submit" value="submit Form" onclick="validateForm() "/>
            <input type="reset" name="reset" value="Reset" />
          </td>
        </tr>
      </table>
      <?php
      
      if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['age'])) {
        
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $address = $_POST['address'];
        $game = $_POST['game'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        

        echo "You'r name : $name<br> password: $pass<br> Address: $address<br> Favourit game: $game
        <br> Gender : $gender <br> Age :$age";
      
      }
    ?>
    </form>
  </body>
</html>
