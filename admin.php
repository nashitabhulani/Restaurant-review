<?php include('frontend/menu.php');?>
<div class="wrapper">
       <div class="main-content">
      
            <h1>ADMIN PANEL</h1>

            <br/>

            <?php
                if(isset($_SESSION['add']))
                {
                  echo $_SESSION['add'];
                  unset ($_SESSION['add']);
                }

                if(isset($_SESSION['delete']))
                {
                  echo $_SESSION['delete'];
                  unset ($_SESSION['delete']);
                }
                if(isset($_SESSION['user-not-found']))
                {
                  echo $_SESSION['user-not-found'];
                  unset ($_SESSION['user-not-found']);
                }
                if(isset($_SESSION['not-matched']))
                {
                  echo $_SESSION['not-matched'];
                  unset ($_SESSION['not-matched']);
                }

                if(isset($_SESSION['changed']))
                {
                  echo $_SESSION['changed'];
                  unset ($_SESSION['changed']);
                }
                
             ?>
             
             <br/><br/> 
           <a href="add-admin.php" class="add">ADD ADMIN</a>
            <br/><br/> <br/>
            <table class="full">
               <tr>
                    <th>Serial no.</th>
                    <th>Full name</th>
                    <th>User Name</th>
                    <th>Actions</th>
               </tr>
               <?php

                 $sql= "SELECT * FROM admin";
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
                         ?>
                         
                         <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $fullname ?></td>
                    <td><?php echo $username ?></td>
                    <td>
                         <!-- <a href="<?php echo SETURL ;?>admin/change-admin.php?id=<?php echo $id; ?>" class="btn">Change Password</a> -->
                    <a href="<?php echo SETURL ;?>delete-admin.php?id=<?php echo $id; ?>" class="btn">DELETE ADMIN</a>
                    
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


