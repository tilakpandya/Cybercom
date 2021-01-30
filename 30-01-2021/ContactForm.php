<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
     if (!empty($name) && !empty($email) && !empty($message)) {
        
        $to = 'tilakpa ndya2@gmail.com';
        $subject = "This mail using PHP";
        $body = $name.'\n'.$message;
        $headers = "From: $email";


        if(mail($to,$subject,$body,$headers)){
            echo 'Email has been sent to'.$to;
        }else {
            echo"there was a problem";
        }

    } else {
        echo"please fill the blank";
    }
    
}

?>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form method="POST">
            <br><div class="form-group">
                <input type="text" class="form-control" maxlength=25 name="name" placeholder="Name"><br>
                <input type="text" class="form-control" maxlength=25 name="email" placeholder="Email Address"><br>
                <textarea type="text" class="form-control" maxlength=1000 name="message" rows=6 placeholder="Message"></textarea><br>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            
        </form>
    </div>
</body>
</html>