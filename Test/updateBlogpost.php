<?php
//include "sql/DataSource.php";
include "header.php";

//$data = new DataSource();
if(empty($_SESSION['email'])){
    header("Location: index.php");
}
$id = $_GET['id'];
$data = new DataSource();
$row=$data->getCategoryDropdown();

$data_array=$data->getBlogByid($id);
//print_r($data_array);

$category = $data_array['category'];
$content = $data_array['content'];
//$user_id = $data->getId($category);
$url = $data_array['url'];
$title = $data_array['Title'];
$publishedat= $data_array['publishedat'];

      //print_r($row);
    if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && 
    isset($_POST['publishedat']) && isset($_POST['category']) && isset($_POST['submit']) 
    && isset($_FILES['image'])) { 
        
     $category = $_POST['category'];
     $content = $_POST['content'];
     //$user_id = $data->getId($category);
     $url = $_POST['url'];
     $title = $_POST['title'];
     $publishedat= $_POST['publishedat'];
     
     if(isset($_FILES['image'])){
         $_FILES['image']['tmp_name'];
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


    
       if (!empty($title) && !empty($content) && !empty($url) 
       && !empty($category) && !empty($image) && !empty($publishedat)) {
          if($data->UpdateToBlog($id,$title,$publishedat,$content,$url,$image,$category)){
              echo"update Successfully"; 
          }
          
       } else {
          echo"Data not updated";
       }
       
    }
?>
<section>
    <div class="container">
        <h1 style="color:gray">Update Blog Post</h1>
        <p style="color:red" id="err_msg"></p>
        <hr>
        <form method="POST" action="#" name="myForm" enctype="multipart/form-data">
            <div class="form-group">
                <table class="table">
                    <tr>
                        <td>
                            <input type="text" name="title" class="form-control" placeholder="title"
                                value="<?php echo $title?>">
                        </td>
                        <td>
                            <textarea type="text" name="content" class="form-control"
                                placeholder="Content"><?php echo $content?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="url" class="form-control" placeholder="URL"
                                value="<?php echo $url?>">
                        </td>
                        <td>
                            <label class="col-md-4 control-label" for="publishedat">Published at</label>
                            <input type="datetime-local" name="publishedat" id="publishedat" class=" form-control"
                                placeholder="published at" value="<?php echo $title?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name=" category" id="category" class="form-control">
                                <option>Category</option>
                                <?php
                                    foreach ($row as $key => $value) {
                                        echo "<option value='".$row['title']."'>".$row['title']."</option>";
                                    }
                                ?>
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