<?php
//include "sql/DataSource.php";
include "header.php";

//$data = new DataSource();
if(empty($_SESSION['email'])){
    header("Location: index.php");
}
$id = $_GET['id'];
$data = new DataSource();
$data_array=$data->getCategoryByid($id);
//print_r($data_array);
       //$id = $_POST['id']; 
       
       $meta_title = $data_array['metatitle'];
       $content = $data_array['content'];
       $url = $data_array['url'];
       $title = $data_array['title'];
       //echo $parentcat= $data_array['parentcat'];

    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && 
    isset($_POST['metatitle']) && isset($_POST['parentcat']) && isset($_POST['submit']) 
    && isset($_FILES['image'])) { 
      
        $id = $_POST['id']; 
       $meta_title = $_POST['metatitle'];
       $content = $_POST['content'];
       $url = $_POST['url'];
       $title = $_POST['title'];
       $parentcat= $_POST['parentcat'];
     
     if(isset($_FILES['image'])){
        echo $_FILES['image']['tmp_name'];
      }


       $target_dir = "img/";
       $target_file = $target_dir.basename($_FILES["image"]["name"]);
       $uploadOk = 1;
       $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
       
       if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "<br>The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "<br>Sorry, there was an error uploading your file.<br>";
    }
    $image=basename( $_FILES["image"]["name"],".jpg"); // used to store the filename in a variable

       if (!empty($id) && !empty($title) && !empty($content) && !empty($url) 
       && !empty($meta_title) && !empty($image)) {
          
        $data->UpdateToCategory($id,$title,$meta_title,$content,$url,$image);
        
       } else {
          echo"Data not inserted";
       }
       
    }
?>
<section>
    <div class="container">
        <h1 style="color:gray">Update Category</h1>
        <p style="color:red" id="err_msg"></p>
        <hr>
        <form method="POST" action="#" name="myForm" enctype="multipart/form-data">
            <div class="form-group">
                <table class="table">
                    <tr>
                        <td>
                            <input type="text" name="id" class="form-control" placeholder="id"
                                value="<?php echo $id; ?>">
                        </td>
                        <td>
                        </td>
                    <tr>
                        <td>
                            <input type="text" name="title" class="form-control" placeholder="title"
                                value="<?php echo $title; ?>">
                        </td>
                        <td>
                            <textarea type="text" name="content" class="form-control"
                                placeholder="Content"><?php echo $content; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="url" class="form-control" placeholder="URL"
                                value="<?php echo $url; ?>">
                        </td>
                        <td>
                            <input type="text" name="metatitle" class=" form-control" placeholder="Meta Title"
                                value="<?php echo $meta_title; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="parentcat" id="parentcat" class="form-control">
                                <option>Parent Category</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss">Miss</option>
                            </select>
                        </td>
                        <td>
                            <input type="file" id="image" name="image" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" class="btn btn-success btn-lg" value="SUBMIT"
                                onclick="validation()" />
                        </td>
                        <td></td>
                    </tr>

                </table>
            </div>
        </form>
    </div>
</section>
<?php
include "footer.php";
?>