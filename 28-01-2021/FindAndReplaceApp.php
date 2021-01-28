<?php

$offset=0;
if (isset($_POST['user_input']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])) {

    $text =$_POST['user_input'];
    $search =$_POST['searchfor'];
    $replace = $_POST['replacewith'];
    $search_length = strlen($search);

    if (!empty($text) && !empty($search) && !empty($replace) ) {
        while ($strpos = strpos($text,$search,$offset)) {
            $offset = $strpos + $search_length;
            $text = substr_replace($text,$replace,$strpos,$search_length);
        }
        echo $text;
    } else {
        echo "fill the blank";
    }
    
    
    

} 

?>

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
                <textarea name="user_input" class="form-control" rows=6 cols=30></textarea><br>
                Search for: <br><input type="text" class="form-control" name="searchfor">
                <br>Replace with: <br><input type="text" class="form-control" name="replacewith">
                <br><input type="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>    