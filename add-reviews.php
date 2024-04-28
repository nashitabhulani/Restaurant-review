<?php include('frontend/menu.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="wrapper">
       <div class="main-content">

      
       <h1>Add Reviews</h1>
       <br><br>
       <?php
         if(isset($_SESSION['done']))
         {
            echo $_SESSION['done'];
            unset($_SESSION['done']);
         }
       
       ?>
       <form action="" method="POST">

       <table class="full">

       <tr>
                    <tr>
                    <td>Full name:</td>
                    <td><input type="text" name="fullname" placeholder="your name:"></td>
</tr>
<tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username" placeholder="your username:"></td>
</tr>

<tr>

                    <td>Description:</td>
                    <td><input type="text"  name="description" placeholder="Your review..."></td>
</tr>
<tr>
                    <td>Restaurant:</td>
                    <td><input type="text" name="restaurant" placeholder="name of restaurant"></td>
</tr>
<tr>
                    <td>Rating:</td>
                    <!-- <td><div class="star-widget">
                  <input type="radio" name="rating" id="rate-5">
                  <label for="rate-5" class="fas fa-star"></label>
                  <input type="radio" name="rating" id="rate-4">
                  <label for="rate-4" class="fas fa-star"></label>
                  <input type="radio" name="rating" id="rate-3">
                  <label for="rate-3" class="fas fa-star"></label>
                  <input type="radio" name="rating" id="rate-2">
                  <label for="rate-2" class="fas fa-star"></label>
                  <input type="radio" name="rating" id="rate-1">
                  <label for="rate-1" class="fas fa-star"></label>
               
            </div></td> -->
            <td><input type ="text" name="rating" placeholder="Rate it.."></td>
</tr>

<tr>
                    <td>Password:</td>
                    <td><input type="password"name="password"placeholder="password"></td>
</tr>
              <tr>
                <td colspan="2">
                <input type="submit"name="submit" value="ADD REVIEW" class="button1">
</tr>

</table>
</form>


<?php

   if(isset($_POST['submit']))
   {
     $fullname=$_POST['fullname'];
     $username=$_POST['username'];
     $description=$_POST['description'];
     $restaurant=$_POST['restaurant'];
     $rating=$_POST['rating'];
     $password=md5($_POST['password']);
          
     

    
     
    //  $rating= 0;
    //  $count=0;
    //  $fiveStarRating=0;
    //  $fourStarRating=0;
    //  $threeStarRating=0;
    //  $twoStarRating=0;
    //  $oneStarRating=0;
    //  while($rate_result=mysqli_fetch_assoc($res)){
    //       $rating += $rate_result['rating'];
    //       $count+=1;
    //       if($rate_result['rating']==5){
    //            $fiveStarRating+=1;
    //       }
    //       elseif($rate_result['rating']==4) {
    //            $fourStarRating+=1;

    //       }
    //       elseif($rate_result['rating']==3)
    //       {
    //            $threeStarRating+=1;
    //       }
    //       elseif($rate_result['rating']==2)
    //       {
    //            $twoStarRating+=1;
              
    //       }
    //        elseif($rate_result['rating']==1)
    //        {
    //            $oneStarRating+=1;
                    
    //            }
    //       }
          
      

                 $sql= "INSERT INTO reviews( fullname, username,description, restaurant, rating, password) 
                 VALUES ('$fullname','$username','$description','$restaurant','$rating','$password')";
        
           $result=mysqli_query($conn,$sql);
        if($result)
        {
            $_SESSION['done'] = "REVIEW added successfully";
      

            header("location:".SETURL.'reviews.php');
            
        }
        else{
            
             $_SESSION['done'] = "ERROR";

             header("location:".SETURL.'add-reviews.php');
            
        }
     }


   
?>
</div>
</div>
<?php include('frontend/footer.php');?>