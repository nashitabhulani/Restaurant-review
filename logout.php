<?php
 include('folder1/constants.php'); 

session_destroy();
header("location:".SETURL.'login.php');
?>