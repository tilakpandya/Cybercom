<!DOCTYPE html>
<html>

<head>
    <title>Login form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    <script src="main.js"></script>
</head>
<?php

include "sql/DataSource.php";
if(isset($_POST['login'])){
    //echo "hello ";
    if (isset($_POST['email']) && isset($_POST['password'])) {
         $email = $_POST['email'];
         $password = md5($_POST['password']);
        
        $data = new DataSource();
        
        if (!empty($email) && !empty($password)) {
            $array_user = $data->getUserMail($email);
            //print_r($array_user);
            $login_email= $array_user['email'];
            $login_pass= $array_user['password'];
            $success=$data->Credential($login_email,$login_pass,$email,$password);
            if(!$success){
                echo"Wrong Credential";
            }
         }   
    }    
    
}
    ?>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Tabs Titles -->
            <div class="fadeIn first">
                <img src="img/cybercom.jpg" id="icon" alt="User Icon" />
            </div>
            <!-- Login Form -->
            <form method="POST" action="#" name="myForm">
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
                <input type="text" id="password" class="fadeIn third " name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In" name="login" onclick="LoginCredential()">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="register.php">Registration</a>
            </div>

        </div>
    </div>
    <section>

    </section>
    <?php
include "footer.php"
?>