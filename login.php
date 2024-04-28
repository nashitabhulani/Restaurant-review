<?php include('folder1/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="login-page">
     <h1>Login Page</h1>
     <br><br>
               <?php
               if(isset($_SESSION['login']))
                {
                  echo $_SESSION['login'];
                  unset ($_SESSION['login']);
                }
                if(isset($_SESSION['not-logged'])){
                    echo $_SESSION['not-logged'];
                  unset ($_SESSION['not-logged']);
                }
                ?>
                <br>
     <form action="" method="POST" class="text">
        <p class="text">Username:</p>
        <input type="text" name="username" placeholder="Username" class="text">
        <br><br>
        <p class="text">Password: </p>
        <input type="password" name="password" placeholder="Password" class="text">
<br><br>
        <input type="submit"name="submit" value="Login" class="button2">


     </form>
    </div>
</body>
</html>

<?php
   if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $res=mysqli_query($conn,$sql);

    $count=mysqli_num_rows($res);

    if($count==1)
    {
        //user avaliable
        $_SESSION['login'] = "<div class='text'>Login successfull.</div>";
          
        //check if user is logged in or not

        $_SESSION['user']=$username;
       header("location:".SETURL);

    }
    else{
        //user not available
       $_SESSION['login'] = "Login not successfull.";

       header("location:".SETURL.'login.php');
           
    }
   }


?>