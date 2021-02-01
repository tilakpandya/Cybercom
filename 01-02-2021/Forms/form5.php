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
    <script src="js/form5.js"></script>
  </head>
  <body>
  <?php  
    if (isset($_POST['email']) && isset($_POST['password']) ) {
       
        $email = $_POST['email'];
        $pass = $_POST['password'];
      
        if (!empty($email) && !empty($pass)) {
          echo "You'r Email : $email <br>Password :$pass";
        } 
        
        
      }
  ?>
    <form action="#" method="POST">
      <table>
        <tr>
          <td colspan="2"><h1>Sign in!</h1></td>
        </tr>
        <tr>
          <td>E-mail address</td>
          <td>
            <input type="email" name="email" id="email" placeholder="mail@address.com" />
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
            <input type="password" name="password" id="pass" placeholder="Password" />
          </td>
        </tr>

        <tr>
            <td></td>
          <td>
            <input type="submit" name="submit" value="submit" onclick="validateForm()" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
