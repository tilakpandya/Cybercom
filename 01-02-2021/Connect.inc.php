 <?php
 
$error = "couldn't connect.";

$host = "localhost";
$user = "root";
$pass = "";

$db = 'test';


$mysqli=@mysqli_connect($host,$user,$pass,$db) or die('not connected!');

 ?>