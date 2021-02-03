 <?php
 
$error = "couldn't connect.";

$host = "localhost";
$user = "root";
$pass = "";

$db = 'test';


if($mysqli=@mysqli_connect($host,$user,$pass,$db)){
    //echo"connected";
}else{
    die('not connected!'); 
    
} 

 ?>