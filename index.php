<?php include('frontend/menu.php');


          if(isset($_SESSION['login']))
                {
                  echo $_SESSION['login'];
                  unset ($_SESSION['login']);
                }



?>

   
   <!--Search starts here-->
   <!-- <section class="search">
     <div class="container">
       <form class="bar" action="">
        <input type="search" name="search" placeholder="search here">
        <input type="submit" name="submit"placeholder="search">
       </form>
     </div>
     </section> -->
     <!--Search ends here-->

    

   <!--top reviews starts here -->
   <section class="reviews">
      <div class="container">
         <div class="head1">
         <strong>Top reviews by users</strong>
      </div>
      <?php
          
      $sql2="SELECT * FROM REVIEWS WHERE ID<='15'";
      $result=mysqli_query($conn,$sql2);
         $count1=mysqli_num_rows($result);

         if($count1>0){
            while($row=mysqli_fetch_assoc($result)){

               $id=$row['id'];
               $fullname=$row['fullname'];
               $username=$row['username'];
               $description=$row['description'];
               $restaurant=$row['restaurant'];
               ?>

              <div class="box4">
            <button>
               <div class="stars1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
      
               <div class="name">
               <span><?php echo $restaurant; ?></span>
             </div>
             
             <div class="user">
             <strong><?php echo $fullname; ?></strong>
             <span><?php echo $username; ?></span>
             </div>
             <?php echo $description;?>
         </div>
      </button>

            <?php


            }
         }




      ?>

         
       <div class="clearfix"></div>
      </div>
   </section>
         <!-- <div class="box4">
           <button>
            <div class="stars1">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="far fa-star"></i>
               <i class="far fa-star"></i>
            </div>
            <div class="name">
              <span> The Table</span>
            </div>
            <div class="user">
            <strong>Jane Mills</strong>
            <span>@Jmills</span>
            </div>
            This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.
         </div>
      </button>
         <div class="box4">
            <button>
               <div class="stars1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
            <div class="name">
               <span>Global Fusion</span>
            </div>
            <div class="user">
            <strong>TRACEY KEYS</strong>
            <span>@tracey</span>
            </div>
            Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.
         </div>
      </button>
         <div class="box4">
            <button>
               <div class="stars1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
           <div class="name">
               <span>Barbeque House</span>
            </div>
            <div class="user">
            <strong>CARTER D.</strong>
            <span>@cart04</span>
            </div>
            
            The experience exceeded our expectations. We chose the ala carte menu because we wanted a quick and memorable lunch. We were out of the resto in 3 hrs and had enough time to drive around and enjoy the coastal scenery.
The service was friendly and impeccable. The food was on point. Everything was just perfect. I've been to bibs, 1,2 and 3 star restos and this is definitely a class in itself.
         
      </div>
   </button>
         <div class="box4">
            <a href="#">
            <button>
               <div class="stars1 ">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
            <div class="name">
                <span>MARTIN </span>
             </div>
             <div class="user">
             <strong>Lilly c</strong>
             <span>@lilly</span>
             </div>
             We can summarize our experience with one word and that is “fantastic”. Whatever we taste , service , hospitality was absolutely perfect. This is 3 michelin star and prices are relatively high but they are fully deservint every cents of this. We went there to celebrate our 25th wedding anniversery and can not think better place than Martin. I hope we will have a chance to visit there again
         </button>
            </a>
          </div>
         
   top reviews ends here -->

   <!-- top restaurants -->
   <section class="restaurants">
      <div class="container">
         <div class="head1">
      <strong>Some of the best-rated restaurants</strong>
         </div>
        
         <?php
         $sql="SELECT * FROM restaurant LIMIT 4";
         $res=mysqli_query($conn,$sql);
         $count=mysqli_num_rows($res);

         if($count>0){
            while($rows=mysqli_fetch_assoc($res)){
               
               $id=$rows['id'];
               $name=$rows['name'];
               $ratings=$rows['ratings'];
               $description=$rows['description'];
               $location=$rows['location'];
               $contactno=$rows['contactno'];
               $image_name=$rows['image_name'];
               ?>

            <div class="row">
               <div class="column">
                 <div class="content">
             <img src="<?php echo SETURL;?>images/<?php echo $image_name; ?>" alt="Restaurants" style="width:100%">
             <h3><?php echo $name; ?></h3>
             <p><?php echo $description;?></p>
             <p>Location:<?php echo $location;?></p>
             <p>Contact:<?php echo $contactno;?></p>
             
            </div>
            </div>
            
               <?php

            }


         }else{
            echo "ERROR! category not added";

         }

         ?>
        
        <div class="clearfix"></div>
        </div>
            </div>
            </section>
      
   
   <!--Top restaurants ends here-->

  <?php include('frontend/footer.php');
  ?>