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
    <script src="js/form4.js"></script>
  </head>
  <body>
  <?php
      
      if (isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['subject'])  && isset($_POST['message'])) {
       
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        
        if (!empty($name) && !empty($email) && !empty($message) && !empty($subject)) {
          echo "You'r name : $name <br> Email : $email <br>Subject : $subject <br>Message :$message";
        }   

        
      }
    
    ?>
    <form action="#" method="POST">
      <table>
        <tr>
          <td colspan="2"><h1>Contact Us!</h1></td>
        </tr>
        <tr>
          <td>
            <input type="text" name="name" id="name" placeholder="Name..." />
          </td>
        </tr>
        <tr>
          <td>
            <input type="email" name="email" id="email" placeholder="Email..." />
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="subject" id="subject" placeholder="Subject.." />
          </td>
        </tr>
        <tr>
          <td>
            <textarea
              name="message"
              cols="22"
              rows="5"
              placeholder="Message.."
              id="message"
            ></textarea>
          </td>
        </tr>

        <tr>
          <td>
            <input type="submit" name="submit" value="submit" onclick="validateForm()"/>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
