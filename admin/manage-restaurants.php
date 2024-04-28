<?php include('partials/menu.php')?>


<div class="wrapper">
       <div class="main-content">
      
            <h1>Manage restaurants</h1>
            <br/><br/> 
            <?php
            if(isset($_SESSION['create']))
         {
            echo $_SESSION['create'];
            unset($_SESSION['create']);

         }
         if(isset($_SESSION['dump']))
         {
            echo $_SESSION['dump'];
            unset($_SESSION['cdump']);

         }

         ?>
            <a href="<?php echo SETURL; ?>admin/add-restaurants.php" class="add">Add Restaurants</a>
            <br/><br/> <br/>
            <table class="full">
               <tr>
                    <th>Serial no.</th>
                    <th>Name</th>
                    <th>Ratings</th>
                    <th>Description</th>
                    
                    <th>Location</th>
                    <th>Contact no.</th>
                    <th>Image</th>
                    <th>Actions</th>
               </tr>
               <?php
               $sql="SELECT * from restaurant";

               $res= mysqli_query($conn,$sql);

                 if($res==TRUE)
                 {
                    $count=mysqli_num_rows($res);

                    if($count>0)
                    {
                      while($rows=mysqli_fetch_assoc($res))
                      {
                         $id=$rows['id'];
                         $name=$rows['name'];
                         $ratings=$rows['ratings'];
                         $description=$rows['description'];
                         $location=$rows['location'];
                         $contactno=$rows['contactno'];
                         $image_name=$rows['image_name'];

                         ?>


               <tr>
                    <td><?php echo $id ?></td>
                    <td> <?php echo $name ?></td>
                    <td><?php echo $ratings ?></td>
                    <td><?php echo $description ?></td>
                    <td><?php echo $location ?></td>
                    <td><?php echo $contactno ?></td>
                    <td><?php echo $image_name ?></td>

                    <td>
                    
                    <a href="<?php echo SETURL ;?>admin/delete-restaurant.php?id=<?php echo $id; ?>" class="btn">Delete Restaurant</a>
                    
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