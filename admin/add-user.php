<?php include('partials/menu.php');?>

<div class="wrapper">
       <div class="main-content">
      
            <h1>ADD USER </h1>
            <br/>

            <?php
                if(isset($_SESSION['save']))
                {
                  echo $_SESSION['save'];
                  unset ($_SESSION['save']);
                }
             ?>
             <br/>
            <div class="form">
            <form action="" method="POST">
               <table class="table2">
                    
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username" placeholder="enter your username here"></td>
                        
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" placeholder="enter your password here"></td>
                        
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit"name="submit" value="ADD USER" class="button1">
                             
                        </td>   
                    </tr>
                
                </table>


            </form> 
</div>
        </div>
</div>

<?php include('partials/footer.php');?>

<?php 
       //checking the submit button
       if(isset($_POST['submit']))
       {
        //echo"Button clicked";
        //get data
       
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        //save into database

        $sql="INSERT INTO user SET
          
          username='$username',
          password='$password'
        ";

        
        $res= mysqli_query($conn,$sql) or die(mysqli_error());

        //session variable

        if($res==TRUE){
            $_SESSION['save'] = "user added successfully";

            header("location:".SETURL.'admin/index.php');
         }
         else{
            $_SESSION['save'] = "FAILED TO ADD USER";

            header("location:".SETURL.'admin/add-user.php');
         }


       }
       

?>
