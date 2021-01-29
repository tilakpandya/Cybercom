<?php
session_start();
if (isset($_SESSION['name'])) {
    echo"<h1>Welcom".$_SESSION['name']."</h1>";
} else {
    echo 'please login';
}

?>