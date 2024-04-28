<?php

//check if the user session is  not set
if(!isset($_SESSION['user'])){
          $_SESSION['not-logged']="<dic class='text'>Please login to access the admin panel</div>";
          header("location:".SETURL.'admin/login.php');
}
?>