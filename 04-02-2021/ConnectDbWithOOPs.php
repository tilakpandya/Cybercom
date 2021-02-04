<?php

class DatabaseConnect
{
    public function __construct($host,$user,$pass,$db) {
        if (!@$this->connect($host,$user,$pass,$db)) {
            echo"Connection Failed";
        }else if($this->connect($host,$user,$pass,$db)) {
            echo"Connect to $host";
        }
    }
    public function connect($host,$user,$pass,$db){
        if (mysqli_connect($host,$user,$pass,$db)) {
            return true;
        } else {
            return false;
        }
        
    }
}

$conn = new DatabaseConnect('localhost','root','','test');
?>