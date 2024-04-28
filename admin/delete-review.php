<?php
  
  include ('../folder1/constants.php');

  $id = $_GET['id'];

  $sql= "DELETE FROM reviews WHERE id=$id";

  $res=mysqli_query($conn,$sql);

  if($res==TRUE)
  {
     //echo "ADMIN DELETED";

     $_SESSION['trash']= "REVIEW DELETED SUCCESSFULLY";
     
     header('location:'.SETURL.'admin/manage-reviews.php');
  }
  else{

    $_SESSION['trash']="FAILED TO DELETE";
   
    header('location:'.SETURL.'admin/manage-reviews.php');
  }
?>