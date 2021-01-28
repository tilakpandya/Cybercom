<?php
    $script = $_SERVER['SCRIPT_NAME'];
?>

<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="<?php echo $script?>" method="POST">
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
            </div>    
        </form>
</body>
</html>