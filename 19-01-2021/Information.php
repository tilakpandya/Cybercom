<html>
    <head>
        <title>Information</title>
    </head>
<body>
    <?php
          $first_name = $_POST['fname'];
          $last_name = $_POST['lname'];
          $bdate = $_POST['dob'];  
          $gender = $_POST['gender'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $que = $_POST['que'];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $state = $_POST['state'];
          $zip = $_POST['zip'];
          $phone = $_POST['phone'];
    ?>
    <h1 align="center">Information...</h1>
    <table border=1 align="center">
        <tr>
            <th>First name:</th>
            <td><?php echo $first_name; ?></td>
        </tr>
        <tr>
            <th>Last name:</th>
            <td><?php echo $last_name; ?></td>
        </tr>
        <tr>
            <th>Date of Birth:</th>
            <td><?php echo $bdate; ?></td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><?php echo $password; ?></td>
        </tr>
        <tr>
            <th>Security Question:</th>
            <td><?php echo $que; ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <th>City:</th>
            <td><?php echo $city; ?></td>
        </tr>
        <tr>
            <th>Zip Code:</th>
            <td><?php echo $zip; ?></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><?php echo $phone; ?></td>
        </tr>
    </table>
</body>