<?php include('partials/menu.php');

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="wrapper">
       <div class="main-content">
      
            <h1>Manage reviews</h1>
            <br/><br/> 
            
        <?php
         if(isset($_SESSION['done']))
         {
            echo $_SESSION['done'];
            unset($_SESSION['done']);
         }

         if(isset($_SESSION['trash']))
         {
            echo $_SESSION['trash'];
            unset($_SESSION['trash']);
         }
         
       
          ?>
       <br><br>
            <a href="<?php echo SETURL; ?>admin/add-reviews.php" class="add">ADD REVIEWS</a>
            <br/><br/> <br/>
            <table class="full">
               <tr>
                    <th>Serial no.</th>
                    <th>Full name</th>
                    <th>User Name</th>
                    <th>Description</th>
                    <th>Rating</th>
                    <th>Restaurant</th>
                    <th>Actions</th>
                    <!-- <th>Value</th>
                    <th>Atmospher</th>
                    <th>service</th>
                    <th>food</th> -->
               </tr>
               <?php
               $sql="SELECT * from reviews";

               $res= mysqli_query($conn,$sql);

                 if($res==TRUE)
                 {
                    $count=mysqli_num_rows($res);

                    if($count>0)
                    {
                      while($rows=mysqli_fetch_assoc($res))
                      {
                         $id=$rows['id'];
                         $fullname=$rows['fullname'];
                         $username=$rows['username'];
                         $description=$rows['description'];
                         $rating=$rows['rating'];
                         $restaurant=$rows['restaurant'];
                    
               ?>
               
              
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $fullname?></td>
                    <td><?php echo $username?></td>
                   
                    <td><?php echo $description?></td>
                    <td><?php echo $rating?></td>
                    <td><?php echo $restaurant?></td>
                    <td>
                         
                    <a href="<?php echo SETURL ;?>admin/delete-review.php?id=<?php echo $id; ?>" class="btn">DELETE REVIEW</a>
                   </td>
                </tr>
           <?php

}
}
else
{

}
}

?>
          
          
               </table>
       </div>
</div>

<?php include('partials/footer.php')?>

