<?php
$host = 'locahost'; 
$user = "root";
$pass = '';
$db = 'test';

//class ServerException extends Exception{}
class DbException extends Exception{
    public function showSpecific()
    {
        return "error thrown on line :".$this->getLine().' in '.$this->getFile();
    } 
}

try {
    if (!@mysqli_connect($host,$user,$pass,$db)) {
        throw new DbException("Could not connect to server or database.");
    }else {
        echo"Connected!";
    }
} catch (DbException $th) {
    echo $th->showSpecific();
}
?>