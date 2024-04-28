<?php include('partials/menu.php'); ?>

<div class="wrapper">
       <div class="main-content">

       <h1>Change password</h1>
       <br><br>

        <?php 
          if (isset($_GET['id'])){
            $id=$_GET['id'];
          }
         ?>

       <form action="" method="POST">

       <table class="table2">
        <tr>
            
        <td>Old password: </td>
        <td>
            <input type="password" name="old_password" placeholder="Old password">
        </td>
</tr>
<tr>
        <td>New password: </td>
        <td><input type="password" name="new_password" placeholder="New password">
</td>

</tr>
<tr>
        <td>Confirm password: </td>
        <td><input type="password" name="confirm_password" placeholder="confirm password">
</td>

</tr>
<tr>
        <td colspan="2"> 
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <input type="submit" name="submit" value="Submit" class="btn">
</td>

</tr>

</table>
</form>
</div>
</div>

<?php
  if(isset($_POST['submit']))
  {

    $id=$_POST['id'];
    $old_password=md5($_POST['old_password']);
    $new_password=md5($_POST['new_password']);
    $confirm_password=md5($_POST['confirm_password']);

    $sql="SELECT * FROM ADMIN WHERE id=$id AND password='$old_password'";

    $res=mysqli_query($conn,$sql);
    if($res==TRUE)
    {

        $count=mysqli_num_rows($res);

        if($count==1)
        {
            if($new_password==$confirm_password){
                 
                $sql2="UPDATE ADMIN
                  SET password='$new_password'
                  WHERE id=$id";

                $res=mysqli_query($conn,$sql2);

                if($res==TRUE){
                    $_SESSION['changed']="Password changed succesfully";

                    header("location:".SETURL.'admin/admin.php');
                }
                else{
                    $_SESSION['changed']="Error while changing the password";

                    header("location:".SETURL.'admin/admin.php');
                }


            }
            else{
                $_SESSION['not-matched']="Password not matched";

            header("location:".SETURL.'admin/admin.php');
            }
             
        }
        else{
            $_SESSION['user-not-found']="User not found";

            header("location:".SETURL.'admin/admin.php');
        }
    }
  }
?>

<?php include('partials/footer.php'); ?>