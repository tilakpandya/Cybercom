<?php
require 'core.inc.php';
include 'Connect.inc.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);

    if (!empty($username) && !empty($password)) {
      
        $query="select id from user6 where username = '$username' AND password = '$password_hash'";
        
        
        if($query_run  = mysqli_query($mysqli,$query)){
           
            $query_num_rows = mysqli_num_rows($query_run);
            
           if ($query_num_rows==0) {
               echo "invalid";
           }elseif ($query_num_rows==1) {
               $user_id = mysqli_fetch_assoc($query_run);
               $_SESSION['user_id']=$user_id;
               header('location:Login.php');
           }else {
              echo "OK";
           } 
        }else {
            # code...
        } 

    } else {
        echo "Please provide Username and Password";
    }
    
  
}
?>

<form action="<?php echo $current_file ?>" method="POST">
Username : <input type="text" name="username"><br>
Password : <input type="password" name="password"><br>
<input type="submit" name="submit" value="Submit">
 
</form>