<?php

    include "header.php";
   

    $data = new DataSource();
    
?>
<section>
    <div class="container">
        <h1 style="color: gray">Read Contact</h1>
        <hr />
        <a href="create.php"><button type="button" class="btn btn-success">Create Contact</button></a>
        </br>
        <br>

        <div class="table-responsive" id="hey">


            <?php
                      $data->select('user7')
             ?>

        </div>
    </div>
</section>
<?php
  include "footer.php";
 ?>