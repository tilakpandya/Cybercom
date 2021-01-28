<?php

$find = array('Tilak','Pandya','Admin');
$replace = array('T**k','P****a','A***n');

if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    $user_input = $_POST['user_input'];
    $user_input_new = str_ireplace($find,$replace,$user_input);
  
    echo $user_input_new;
}
?>
<hr>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="FindAndReplaceApp.php" method="POST">
            <div class="form-group">

                <form action="#" method="POST">
                    <textarea name="user_input" class="form-control" rows=6 cols=30></textarea><br>
                    <input type="submit" value="submit" class="btn btn-primary">
                </form>
    </div>
</body>
</html>