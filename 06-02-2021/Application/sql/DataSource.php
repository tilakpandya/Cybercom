<?php

//namespace dataSource;
class DataSource
{


    const host = "localhost";
    const user = "root";
    const pass = "";
    
    const db = 'test';
    
    private $conn;

public function __construct() {
    
    $this->conn = @mysqli_connect(self::host,self::user,self::pass,self::db) or die('not connected!');

}    


public function select($table)
{
    
    $query = "select `id`,`name`, `email`, `phone`, `title`, `created` from $table";
    if($query_run= mysqli_query($this->conn, $query)){
        if(@mysqli_num_rows($query_run)==NULL){
            echo "No result found";
        }else { echo'<table class="table table-sm table-striped table-bordered" >';
            echo"<tr>";
                echo"<th>#</th>";
                echo"<th>Name</th>";
                echo"<th>Email</th>";
                echo"<th>Phone</th>";
                echo"<th>Title</th>";
                echo"<th>Created</th>";
                echo"<th></th>";
                
            echo"</tr>";
  while ($row = mysqli_fetch_assoc($query_run)) {
    echo'<tr id="table">';
      echo'<td>'.$row["id"].'</td>';
      echo'<td>'.$row["name"].'</td>';
      echo'<td>'.$row["email"].'</td>';
      echo'<td>'.$row["phone"].'</td>';
      echo'<td>'.$row["title"].'</td>';
          echo'<td>'.$row["created"].'</td>';    
      echo'<td><a href="update.php?id='.$row["id"].'" class="btn btn-info btn-md">
      <span class="glyphicon glyphicon-pencil"></span></a>
      <button type="button" class="btn btn-danger btn-md" onclick="handleDelete('.$row["id"].')">
      <span class="glyphicon glyphicon-trash"></span> </button></td>';        
      echo"</tr>";
    }
    echo"</table>"; }
    }else {
    die('Query not success!');
    }
}

public function insert($name,$email,$phone,$title,$created)
{
        $sql = "INSERT INTO `user7`(`name`, `email`, `phone`, `title`, `created`)
        VALUES ('$name','$email','$phone','$title','$created')";

        if (mysqli_query($this->conn,$sql)) {
            echo "New record created successfully";
            mysqli_close($this->conn);
            header("location:contact.php");
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
}

public function Update($id,$name,$email,$phone,$title,$created)
{
    $edit = mysqli_query($this->conn,"update user7 set name='$name', email='$email', phone=$phone, title='$title', created='$created' where id='$id'");
    if ($edit) {
        echo "Data updated";
        mysqli_close($this->conn); // Close connection
        header("location:contact.php"); // redirects to all records page
        exit;	
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}

public function getDataById($id)
{
    $qry = "select * from user7 where id='$id'";
    if ($query_run= mysqli_query($this->conn, $qry)) {
        if(@mysqli_num_rows($query_run)!=NULL){
        
            while ($row = mysqli_fetch_assoc($query_run)) {
               // echo $row['id'].'<br>'.$row['name'].'<br>'.$row['phone'].'<br>'.$row['created'].'<br>'.$row['title'];
               return $row;
            }
             
         }else{
             echo "No result found";
         }     
    }
    
    
}
public function DeleteItem($id)
{
    $sql = "DELETE FROM `user7` WHERE id='$id'";

        if (@mysqli_query($this->conn, $sql)) {
            return 1;
        } 
        else {
            return 0;
        }
        mysqli_close($this->conn);
    
    
}

}

?>