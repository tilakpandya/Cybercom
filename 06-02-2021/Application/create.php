<?php
//include "sql/DataSource.php";
include "header.php";

//$data = new DataSource();

$data = new DataSource();

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && 
    isset($_POST['title']) && isset($_POST['created']) && isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $title = $_POST['title'];
      $created= $_POST['created'];
       $submit = $_POST['submit'];
       
       if (!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($created)) {
           $data->insert($name,$email,$phone,$title,$created);
       } else {
          echo"Data not inserted";
       }
       
    }
?>
<section>
    <div class="container">
        <h1 style="color:gray">Create Contact</h1>
        <p style="color:red" id="err_msg"></p>
        <hr>
        <form method="POST" action="#" name="myForm">
            <div class="form-group">
                <table class="table">
                    <tr>
                        <td>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </td>
                        <td>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="phone" maxlength=10 class="form-control" placeholder="Phone">
                        </td>
                        <td>
                            <input type="text" name="title" class=" form-control" placeholder="Title">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="datetime-local" name="created" class="form-control" placeholder="Created">
                        </td>
                        <td>
                            <input type="submit" name="submit" class="btn btn-success btn-lg" value="Created"
                                onclick="validation()">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</section>
<?php
include "footer.php";
?>