<?php include('frontend/menu.php');
echo "<style> body { background-image: url(images/reviews.jpeg);
          background-repeat: no-repeat; 
         background-size:cover; } </style>";

         if(isset($_SESSION['done']))
         {
            echo $_SESSION['done'];
            unset($_SESSION['done']);
         }
       
?>
 <!-- Navbar section ends here-->
 
   
 </body>
    <!--section-->
    <section class="page2">
  
        <!--heading-->
        <div class="heading">
            <span>Top Reviews</span>
            <h1>Comments by the users</h1>

            <?php
          
          $sql="SELECT * FROM REVIEWS WHERE ID>='15'";
          $result=mysqli_query($conn,$sql);
             $count=mysqli_num_rows($result);
    
             if($count>0){
                while($row=mysqli_fetch_assoc($result)){
    
                   $id=$row['id'];
                   $fullname=$row['fullname'];
                   $username=$row['username'];
                   $description=$row['description'];
                   $restaurant=$row['restaurant'];
                   ?>
                     <!--box 1-->
            <div class="box-container">
            <div class="rev1">
                <!--box top-->
             <div class="name1">
               <h2><?php echo $restaurant; ?></h2>
             </div>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
             </div>
             <!--username-->
             <div class="user1">
             <strong><?php echo $fullname; ?> </strong>
             <span><?php echo $username; ?></span>
             <!--description-->
             </div>
             <?php echo $description; ?>

         <!--rating-->
         <div class="ratings">
         <div class="value">VALUE
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <br>
         <div class="service">SERVICE
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <br>
         <div class="atmosphere">ATMOSPHERE
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <br>
         <div class="food">FOOD
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         </div>
            </div>
        </div>





                   <?php


}
}



?>
<a href="<?php echo SETURL ;?>add-reviews.php?id=<?php echo $id; ?>" class="btn">ADD REVIEW</a>
                    
           
        
        <!-- <div class="box-container">
         <div class="rev1">
            <form id="regForm" action="">

               <h1>GIVE YOUR REVIEWS</h1>
               
                One "tab" for each step in the form:
               <div class="tab">Name:
                 <p><input placeholder="Full name..." name="fullname"></p>
                 
               </div>
               
               
               
               <div class="tab">REVIEW:
                 <p><input placeholder="restaurant name" name="restaurant"></p>
                 RATING:<div class="star-widget">
                  <input type="radio" name="rate" id="rate-5">
                  <label for="rate-5" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-4">
                  <label for="rate-4" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-3">
                  <label for="rate-3" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-2">
                  <label for="rate-2" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-1">
                  <label for="rate-1" class="fas fa-star"></label>
               
            </div>
            <p><input placeholder="write here" name="describe"></p> 
             -->
                 <!-- <p><input placeholder="write here" oninput="this.tab = ''"></p>
                 VALUE:<div class="star-widget">
                  <input type="radio" name="rate" id="rate-5">
                  <label for="rate-5" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-4">
                  <label for="rate-4" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-3">
                  <label for="rate-3" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-2">
                  <label for="rate-2" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-1">
                  <label for="rate-1" class="fas fa-star"></label>
               
            </div>
            
            ATMOSPHERE:<div class="star-widget">
               <input type="radio" name="rate" id="rate-5">
               <label for="rate-5" class="fas fa-star"></label>
               <input type="radio" name="rate" id="rate-4">
               <label for="rate-4" class="fas fa-star"></label>
               <input type="radio" name="rate" id="rate-3">
               <label for="rate-3" class="fas fa-star"></label>
               <input type="radio" name="rate" id="rate-2">
               <label for="rate-2" class="fas fa-star"></label>
               <input type="radio" name="rate" id="rate-1">
               <label for="rate-1" class="fas fa-star"></label>
            
         </div>
         SERVICE:<div class="star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>
         
      </div>
      FOOD:<div class="star-widget">
         <input type="radio" name="rate" id="rate-5">
         <label for="rate-5" class="fas fa-star"></label>
         <input type="radio" name="rate" id="rate-4">
         <label for="rate-4" class="fas fa-star"></label>
         <input type="radio" name="rate" id="rate-3">
         <label for="rate-3" class="fas fa-star"></label>
         <input type="radio" name="rate" id="rate-2">
         <label for="rate-2" class="fas fa-star"></label>
         <input type="radio" name="rate" id="rate-1">
         <label for="rate-1" class="fas fa-star"></label>
      
   </div>
   -->

               <!-- <div class="tab">Login Info:
                 <p><input placeholder="Username..." name="username"></p>
                 <p><input placeholder="Password..." name="password"></p>
               </div>
               
               <input type="submit"name="submit" value="ADD REVIEW">
               
               </form> -->
               
         </div>
        </div>
    </section>
</body>
</html>