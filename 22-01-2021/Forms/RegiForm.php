<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?> //this code is executed when the form is submitted

        <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>

        <p>You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </p>

        <p>Go <a href="RegiForm.php">back</a> to the form</p>

        <?php else: ?>
            <div class="container">
            <h2>Registration Form</h2>
             
            <form action="#" method="POST">
             <div class="form-group">
               
                <input type="text" class="form-control" name="firstname" placeholder=" First name">
               
                <input type="text" class="form-control" name="lastname" placeholder="Last name">

                <input type="hidden"  name="form_submitted" value="1" /><br>

                <input type="submit" class="btn btn-primary" value="Submit">
             </div>
            </form>
            </div>
            

      <?php endif ?> 
</body> 
</html>