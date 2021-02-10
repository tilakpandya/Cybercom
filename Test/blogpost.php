<?php
    include "header.php";
    if(empty($_SESSION)){
        header("Location: index.php");
    }
?>
<section>
    <div class="container">
        <h1 style="color: gray">Blog Post</h1>
        <hr />
        <a href="AddBlog.php"><button type="button" class="btn btn-success">Add Blog Post</button></a>
        </br>
        <br>

        <div class="table-responsive" id="hey">


            <?php
                      $data->listBlog();
             ?>

        </div>
    </div>
</section>
<?php
  include "footer.php";
 ?>