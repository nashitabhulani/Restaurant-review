<?php include('partials/menu.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="wrapper">
       <div class="main-content">

      
       <h1>Add Restaurant</h1>
       <br><br>
       <?php
         if(isset($_SESSION['create']))
         {
            echo $_SESSION['create'];
            unset($_SESSION['create']);

         }
         if(isset($_SESSION['upload']))
         {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);

         }
         
       ?>
       <form action="" method="POST" enctype="multipart/form-data">

       <table class="full">
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder=""></td>
        </tr>
        
        <tr>
            <td>Ratings</td>
            <td>
            <!-- <div class="star-widget">
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
               
            </div> -->
            <input type="text" name="rate" placeholder="rate this restaurant..">
            </td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text"  name="description"  placeholder="Description..."></textarea></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="location" placeholder="location.."></td>
        </tr>
        <tr>
            <td>Contact No.:</td>
            <td><input type="text" name="contactno" placeholder="contact no."></td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="submit"name="submit" value="ADD RESTAURANT" class="button1">
           
        </tr>
</table>
</form>

<?php

 if(isset($_POST['submit']))
{
    // echo "button clicked";

    $name=$_POST['name'];
    $ratings=$_POST['rate'];
    $description=$_POST['description'];
    
    $location=$_POST['location'];
    $contactno=$_POST['contactno'];

    // print_r($_FILES['image']);

    // die();

    if(isset($_FILES['image']['name'])){
        $image_name=$_FILES['image']['name'];
        $source_path= $_FILES['image']['tmp_name'];
        $destination_path="../images".$image_name;

        $upload=move_uploaded_file($source_path,$destination_path);

        if($upload==FALSE)
        {
            $_SESSION['upload']= "Failed to upload";

            header("location:".SETURL.'admin/add-restaurants.php');
            die();
        }
    }
    else{
        $image_name="";
    }


    $sql = "INSERT INTO restaurant SET 
      name='$name',
      ratings='$ratings',
       description='$description',
      location='$location',
      contactno='$contactno',
      image_name='$image_name'
      ";

    $res=mysqli_query($conn, $sql);

    if($res==TRUE){
        $_SESSION['create'] = "ADDED SUCCESSFULLY";

        header("location:".SETURL.'admin/manage-restaurants.php');
    }
    else{
        $_SESSION['create'] = "ERROR";

        header("location:".SETURL.'admin/add-restaurants.php');
    }
}




?>



</div>
</div>
<?php include('partials/footer.php');?>

