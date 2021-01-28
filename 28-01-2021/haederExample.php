<?php

    if (isset($_POST['submit'])) {
        header('location:https://www.google.com');
    }

?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">

                <form action="#" method="POST">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </form>
            </div>
</body>
</html>