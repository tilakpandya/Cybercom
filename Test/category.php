<?php
    include "header.php";
    if(empty($_SESSION)){
        header("Location: index.php");
    }
?>
<section>
    <div class="container">
        <h1 style="color: gray">Blog category</h1>
        <hr />
        <a href="AddCategory.php"><button type="button" class="btn btn-success">Add Category</button></a>
        </br>
        <br>

        <div class="table-responsive" id="hey">


            <?php
                      $data->listCategory();
             ?>

        </div>
    </div>
</section>
<?php
  include "footer.php";
 ?>