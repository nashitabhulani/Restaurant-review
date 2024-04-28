<?php include('partials/menu.php')?>


<div class="wrapper">
       <div class="main-content">
      
            <h1>Users</h1>
            <br><br>
           
           <a href="add-user.php" class="add">ADD USER</a>
            <br><br> <br>
            <?php 
         if(isset($_SESSION['login']))
              {
              echo $_SESSION['login'];
              unset ($_SESSION['login']);
              }
              if(isset($_SESSION['log']))
              {
              echo $_SESSION['log'];
              unset ($_SESSION['log']);
              }
              if(isset($_SESSION['save']))
              {
              echo $_SESSION['save'];
              unset ($_SESSION['save']);
              }
           ?>

<table class="full">
               <tr>
                    <th>Serial no.</th>
                    <th>User Name</th>
                    
               </tr>

               <?php

               $sql="SELECT * FROM user ";
               $res=mysqli_query($conn,$sql);

               if($res==TRUE){
                  
                  $count=mysqli_num_rows($res);
                  while($rows=mysqli_fetch_assoc($res)){

                     $id=$rows['id'];
                     $username=$rows['username'];
                     ?>
                 <tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $username; ?></td>
                 
                </tr>



                     <?php
                  }

               }
               ?>
               


            </table>
       </div>
</div>

<?php include('partials/footer.php')?>