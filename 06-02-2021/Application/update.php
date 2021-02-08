<?php
include "header.php";

$id = $_GET['id'];
$data = new DataSource();
$data_array=$data->getDataById($id);
//print_r($data_array);
$name = $data_array['name'];
$email = $data_array['email'];
$phone = $data_array['phone'];
$title = $data_array['title'];
$created = $data_array['created'];

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && 
    isset($_POST['title']) && isset($_POST['created'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $title = $_POST['title'];
       $created= $_POST['created'];
       //echo $submit = $_POST['submit'];
 ?>

<section>
    <?php 
        if (!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($created)) { if($data->
            Update($id,$name,$email,$phone,$title,$created)){
            echo"Data Updated Successfully!";
        }

    } else {
            echo"<p style='color:"."red"."'>Data not Updated</p>";
        }

}
            ?>
    <div class="container">


        <form action="#" method="POST">

            <h1 style="color:gray">Update Contact</h1>
            <hr>

            <div class="form-group">
                <table class="table">
                    <tr>
                        <td>
                            <input type="text" name='name' class="form-control" value="<?php echo $name ?>"
                                placeholder="Name">
                        </td>
                        <td>
                            <input type="email" name='email' class="form-control" value="<?php echo $email ?>"
                                placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name='phone' maxlength=10 class="form-control"
                                value="<?php echo $phone ?>" placeholder="Phone">
                        </td>
                        <td>
                            <input type="text" name='title' class="form-control" value="<?php echo $title ?>"
                                placeholder="Title">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="datetime-local" name='created' class="form-control"
                                value="<?php echo $created ?>" placeholder="Created">
                        </td>
                        <td>
                            <input type="submit" name="submited" class="btn btn-success btn-lg" value="Created"
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