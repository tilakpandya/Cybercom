<?php
session_start();
//namespace dataSource;
class DataSource
{


    const host = "localhost";
    const user = "root";
    const pass = "";
    
    const db = 'exam';
    
    private $conn;

public function __construct() {
    
    $this->conn = @mysqli_connect(self::host,self::user,self::pass,self::db) or die('not connected!');

}    

public function RegisterUser($prefix,$firstname,$lastname,$mobile,$email,$password,$information)
{
    $d=mktime(11, 14, 54, 8, 12, 2014);
    $CreatedAt = date("Y-m-d h:i:sa", $d);
    
    $sql = "INSERT INTO `user`(`prefix`, `firstname`, `lastname`, `mobile`, `email`, `password`, 
    `information`, `CreatedAt`) VALUES ('$prefix','$firstname','$lastname','$mobile','$email',
    '$password','$information','$CreatedAt')";

    if (mysqli_query($this->conn,$sql)) {
        header("location:index.php");
        echo "New record created successfully";
        mysqli_close($this->conn);
       
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}

public function getUserMail($email)
{
    $qry = "select * from user where email='$email'";
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

public function Credential($login_email,$login_pass,$email,$password)
{
    
        if ($email == $login_email && $password == $login_pass) {
            $_SESSION['email']=$login_email;
            header('location:blogpost.php');
        }else{
            header('location:index.php');
        }
  
    
}


//----------------------------------------Category--------------------------------------------
//--------------------------------------------------------------------------------------------
public function addToCategory($id,$title,$meta_title,$content,$url,$image)
{
    $d=mktime(11, 14, 54, 8, 12, 2021);
    $CreatedAt = date("Y-m-d h:i:sa", $d);
    
    $sql = "INSERT INTO `category`(`id`, `title`, `metatitle`, `url`, `image`, `content`, 
    `createdat`) VALUES ('$id','$title','$meta_title','$url','$image',
    '$content','$CreatedAt')";

    if (mysqli_query($this->conn,$sql)) {
        header("location:category.php");
        echo "New record created successfully";
        mysqli_close($this->conn);
       
    } else {
        echo "<br>Error: " . $this->conn->error;
    }
}

public function listCategory()
{
    
    $query = "select `id`, `title`, `metatitle`, `url`, `image`, `createdat`, `updatedat`, 
    `content` from category";
    if($query_run= mysqli_query($this->conn, $query)){
        if(@mysqli_num_rows($query_run)==NULL){
            echo "No result found";
        }else { echo'<table class="table table-sm table-striped table-bordered" >';
            echo"<tr>";
                echo"<th>Category ID</th>";
                echo"<th>Catgory Image</th>";
                echo"<th>Catgory Name</th>";
                echo"<th>Created Date</th>";
                echo"<th>Action</th>";
                
            echo"</tr>";
  while ($row = mysqli_fetch_assoc($query_run)) {
    echo'<tr id="table">';
      echo'<td>'.$row["id"].'</td>';
      //echo'<td>'.$row["title"].'</td>';
      echo'<td> <img scr="img/'.$row["image"].'.jpg" height="50px" width="100px"></td>';
      echo'<td>'.$row["title"].'</td>';
      //echo'<td>'.$row["title"].'</td>';
          echo'<td>'.$row["createdat"].'</td>';    
      echo'<td><a href="updateCategory.php?id='.$row["id"].'" class="btn btn-info btn-md">
      <span class="glyphicon glyphicon-pencil"></span></a>
      
      <button type="button" class="btn btn-danger btn-md" onclick="CategoryDeleteJs('.$row["id"].')">
      <span class="glyphicon glyphicon-trash"></span> </button></td>';        
      echo"</tr>";
    }
    echo"</table>"; }
    }else {
    die('Query not success!');
    }
}
public function getCategoryByid($id)
{
    $qry = "select * from category where id='$id'";
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

public function UpdateToCategory($id,$title,$meta_title,$content,$url,$image){
    $d=mktime(11, 14, 54, 8, 12, 2021);
    $updatedat = date("Y-m-d h:i:sa", $d);
    
    $edit = mysqli_query($this->conn,"update category set title='$title', metatitle='$meta_title', content='$content', url='$url', updatedat='$updatedat' where id='$id'");
    if ($edit) {
        echo "Data updated";
        mysqli_close($this->conn); // Close connection
        header("location:category.php"); // redirects to all records page
        exit;	
    } else {
        echo "Error: " . $this->conn->error;
    }
}

public function DeleteCategory($id)
{
    $sql = "DELETE FROM `category` WHERE id='$id'";

        if (@mysqli_query($this->conn, $sql)) {
            return 1;
        } 
        else {
            return 0;
        }
        mysqli_close($this->conn);
    
    
}

public function getCategoryDropdown()
{
    $qry = "select id,title from category";
    if ($query_run= mysqli_query($this->conn, $qry)) {
        if(@$row1=mysqli_num_rows($query_run)!=NULL){
        
             while ($row = mysqli_fetch_assoc($query_run)) {
               return $row;
            } 
            //return $row1;
             
         }else{
             echo "No result found";
         }     
    }
}


//----------------------------------------Blog--------------------------------------------
//--------------------------------------------------------------------------------------------

public function addToBlog($title,$publishedat,$content,$url,$image,$category)
{
    $d=mktime(11, 14, 54, 8, 12, 2021);
    $createdat = date("Y-m-d h:i:sa", $d);
        $sql = "INSERT INTO `blog_post`(`Title`, `url`, 
        `content`, `category`, `image`, `publishedat`, `createdat`) VALUES 
        ('$title','$url','$content','$category','$image','$publishedat','$createdat')";

        if (mysqli_query($this->conn,$sql)) {
            echo "New record created successfully";
            mysqli_close($this->conn);
            header("location:blogpost.php");
        } else {
            echo "Error: <br>" . $this->conn->error;
        }
}

public function listBlog()
{
    
    $query = "select * from blog_post";
    if($query_run= mysqli_query($this->conn, $query)){
        if(@mysqli_num_rows($query_run)==NULL){
            echo "No result found";
        }else { echo'<table class="table table-sm table-striped table-bordered" >';
            echo"<tr>";
                echo"<th>Post ID</th>";
                echo"<th>Catgory name</th>";
                echo"<th>Title</th>";
                echo"<th>Published Date</th>";
                echo"<th>Action</th>";
                
            echo"</tr>";
  while ($row = mysqli_fetch_assoc($query_run)) {
    echo'<tr id="table">';
      echo'<td>'.$row["id"].'</td>';
      echo'<td>'.$row["category"].'</td>';
      echo'<td>'.$row["Title"].'</td>';
      echo'<td>'.$row["publishedat"].'</td>';    
      echo'<td><a href="updateBlogpost.php?id='.$row["id"].'" class="btn btn-info btn-md">
      <span class="glyphicon glyphicon-pencil"></span></a>
      
      <button type="button" class="btn btn-danger btn-md" onclick="BlogDeleteJs('.$row["id"].')">
      <span class="glyphicon glyphicon-trash"></span> </button></td>';        
      echo"</tr>";
    }
    echo"</table>"; }
    }else {
    die('Query not success!');
    }
}
public function getBlogByid($id)
{
    $qry = "select * from blog_post where id='$id'";
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

public function UpdateToBlog($id,$title,$publishedat,$content,$url,$image,$category)
{
    $d=mktime(11, 14, 54, 8, 12, 2021);
    $updatedat = date("Y-m-d h:i:sa", $d);
    
    $edit = mysqli_query($this->conn,"update blog_post set title='$title', category='$category', 
    content='$content', url='$url', updatedat='$updatedat',publishedat='$publishedat' where id='$id'");
    if ($edit) {
        echo "Data updated";
        mysqli_close($this->conn); // Close connection
        header("location:blogpost.php"); // redirects to all records page
        exit;	
    } else {
        echo "Error: " . $this->conn->error;
    }
}

public function DeleteBlog($id)
{
    $sql = "DELETE FROM `blog_post` WHERE id='$id'";

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