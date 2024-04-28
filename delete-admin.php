<?php
  
  include ('folder1/constants.php');

  $id = $_GET['id'];

  $sql= "DELETE FROM admin WHERE id=$id";

  $res=mysqli_query($conn,$sql);

  if($res==TRUE)
  {
     //echo "ADMIN DELETED";

     $_SESSION['delete']= "ADMIN DELETED SUCCESSFULLY";
     
     header('location:'.SETURL.'admin.php');
  }
  else{

    $_SESSION['delete']="FAILED TO DELETE";
   
    header('location:'.SETURL.'admin.php');
  }
?>