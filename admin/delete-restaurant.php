<?php
  
  include ('../folder1/constants.php');

  $id = $_GET['id'];

  $sql= "DELETE FROM restaurant WHERE id=$id";

  $res=mysqli_query($conn,$sql);

  if($res==TRUE)
  {
     //echo "ADMIN DELETED";

     $_SESSION['dump']= "RESTAURANT DELETED SUCCESSFULLY";
     
     header('location:'.SETURL.'admin/manage-restaurants.php');
  }
  else{

    $_SESSION['dump']="FAILED TO DELETE";
   
    header('location:'.SETURL.'admin/manage-restaurants.php');
  }
?>