<?php ob_start();?>

<h1>My page</h1>
This is my page.

<?php
$redirect_page = 'https://www.google.com/';
$redirect = true;

if ($redirect == true) {
    header('location:https://www.google.com');
}

ob_end_flush();
?>