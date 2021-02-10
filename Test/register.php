<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php
include "sql/DataSource.php";
        if (isset($_POST['prefix']) && isset($_POST['firstname']) && isset($_POST['lastname']) 
        && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && 
        isset($_POST['confpassword']) && isset($_POST['information']) && isset($_POST['terms'])
         && isset($_POST['register'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = md5($_POST['password']);
            $confpassword = md5($_POST['confpassword']);
            $info = $_POST['information'];
            $prefix = $_POST['prefix'];
            $terms = $_POST['terms'];
            
            $data = new DataSource();
            
            if (!empty($prefix) && !empty($firstname) && !empty($lastname) && !empty($email) && 
            !empty($phone) && !empty($confpassword) && !empty($password) && !empty($info) 
            && !empty($terms) && $password == $confpassword) {
                echo "OK";
                if($data->RegisterUser($prefix,$firstname,$lastname,$mobile,$email,$password,$information)){
                    echo "Success"; 
                }else{
                    echo "Failure"; 
                }
             }
             else{
                 echo "Wrong Data inputed.";
             } 
    }
    
?>

<body>
    <div class="container">
        <form action="#" method="POST" align=" center" name="myForm">
            <div class="form-group">
                <fieldset align="center">

                    <!-- Form Name -->
                    <legend>Registration Form</legend>

                    <!-- Text input-->
                    <div align=center>
                        <div class=" form-group">
                            <select name="prefix" id="prefix" class="form-control">
                                <option>Prefix</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss">Miss</option>
                            </select>
                        </div>

                        <div class=" form-group">

                            <label class="col-md-4 control-label" for="firstname"></label>
                            <div class="col-md-5">
                                <input id="firstname" name="firstname" type="text" placeholder="firstname"
                                    class="form-control">

                            </div>
                        </div>
                        <div class=" form-group">

                            <label class="col-md-4 control-label" for="lastname"></label>
                            <div class="col-md-5">
                                <input id="lastname" name="lastname" type="text" placeholder="lastname"
                                    class="form-control">

                            </div>
                        </div>
                        <div class=" form-group">

                            <label class="col-md-4 control-label" for="email"></label>
                            <div class="col-md-5">
                                <input id="email" name="email" type="email" placeholder="Email" class="form-control">

                            </div>
                        </div>

                        <div class=" form-group">

                            <label class="col-md-4 control-label" for="phone"></label>
                            <div class="col-md-5">
                                <input id="phone" name="phone" type="number" placeholder="phone" class="form-control">

                            </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password"></label>
                            <div class="col-md-5">
                                <input id="password" name="password" type="password" placeholder="Password "
                                    class="form-control input-md"><br>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="confpassword"></label>
                            <div class="col-md-5">
                                <input id="confpassword" name="confpassword" type="password"
                                    placeholder="Confirm Password " class="form-control input-md"><br>

                            </div>
                        </div>

                        <div class=" form-group">

                            <label class="col-md-4 control-label" for="information"></label>
                            <div class="col-md-5">
                                <textarea id="information" name="information" type="text" placeholder="information"
                                    class="form-control"></textarea>

                            </div>
                        </div>

                        <div class=" form-check">
                            <div class="col-md-7">
                                <input id="terms" name="terms" type="checkbox" class="form-check-input">
                                <label class="form-check-label" for="terms"> Here by, i accept
                                    terms and conditions</label>


                            </div>
                        </div>


                        <!-- Button -->
                        <div class="form-group">
                            <br>
                            <br>
                            <a href="index.php">SignIn</a>
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-2">
                                <button type="button " id="register" name="register" class="btn btn-primary"
                                    onclick="Validation()" value="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
    <?php
    include "footer.php";
    ?>