<?php include('frontend/menu.php');
?>
 <!--section 1-->
<div class="header">
    <strong>SOME OF THE TOP RESTAURANTS TO TRY</strong>
</div>


<?php
         $sql="SELECT * FROM restaurant WHERE id>='11'";
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

<div class="grid">
    <div class="sub">
        <div class="info">
            <img src="<?php echo SETURL;?>images/<?php echo $image_name; ?>" alt="Restaurants" style="width:100%">
            <h3><?php echo $name;?></h3>
            <div class="stars2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
             </div>
            <p> <?php echo $description;?>
            
            <p>
                Location:<?php echo $location;?>
                </p>
                
                <p> Contact: <?php echo $contactno ?>
            </p>
            
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
        <!-- <div class="sub">
            <div class="info">
                <img src="images/Royal crest.jpg" alt="Restaurants" style="width:100%">
                <h3>Royal Crest </h3>
                <div class="stars2">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                 </div>
                <p>  Royal Crest is a wine bar and restaurant for the curious—from casual drinkers to savvy connoisseurs. Our obsessively curated list and complementary food menu is designed to start a conversation, because there’s really no wrong way to drink wine… except in bad company.
                    Cocktails wow, wine great and lovely selection of beers. Love this place and will continue to visit.
                    <br>
                    Location:Andheri, Mumbai
                    <br>
                Contact No.-2020202
                </p>
                </div>
                <div class="menu1">
                   
                </div>
            </div>
            <div class="sub">
                <div class="info">
                    <img src="images/tasty delites.jpg" alt="Restaurants" style="width:100%">
                    <h3>Tasty Delites </h3>
                    <div class="stars2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                    <p> Tasty Delites pushes the envelope of Chinese cuisine. Taking its influences from our team members’ culinary roots, Tasty Delites blends traditional and innovative techniques to create unique offerings using local ingredients in all of its dishes. Tasty Delites is grounded in hospitality with our staff’s commitment to providing you with a memorable experience each time you walk through our door.
                        <br>
                        Location:Saki Naka,Mumbai
                        <br>
                    Contact No.-3030303
                    </p>
                    </div>
                    <div class="menu1">
                       
                    </div>
                </div>
                <div class="sub">
                    <div class="info">
                        <img src="images/Copper Chimney.jpg" alt="Restaurants" style="width:100%">
                        <h3>Copper Chimney </h3>
                        <div class="stars2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                         </div>
                        <p> We are a tight-knit, fun-loving, devoted team of local cooks spreading the gospel of good times and good food in Mumbai.  We offer limited capacity onsite events in our restaurant kitchen space. And worry not, our krewe will travel to your destination of choice – from hotel ballrooms to private kitchens – to entertain groups of all sizes. We cook, we tell stories, we deliver informative culinary demonstrations and lectures, but most of all … we treat every event like you’re a guest at our dinner table. Join us!
                            <br>
                            Location:Airport Road,Mumbai
                            <br>
                        Contact No.-4040404
                        </p>
                        </div>
                        <div class="menu1">
                           
                        </div>
                    </div>
                    <div class="sub">
                        <div class="info">
                            <img src="images/Kitchen on Fire.jpg" alt="Restaurants" style="width:100%">
                            <h3>The Pearl</h3>
                            <div class="stars2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                             </div>
                            <p>We believe in the commitment to our community and in fostering long term relationships with local farmers and fishermen. Our menus reflect these connections, featuring local, seasonal produce and sustainably sourced seafood and meats.

                                When we think about celebrations, The Pearl is always our first option and it never disappoints. From the starter to the dessert the quality and tastes of everything was outstanding,The caviar, Tuna, Shrimp might have been the best meal you have ever been served. Service is delightful and very professional. 10/10
                                <br>
                                Location:Bandra,Mumbai
                                <br>
                            Contact No.-5050505
                            </p>
                            </div>
                            <div class="menu1">
                               
                            </div>
                        </div>    
                        <div class="sub">
                            <div class="info">
                                <img src="images/kitchen spice.jpg" alt="Restaurants" style="width:100%">
                                <h3>Kitchen Spice </h3>
                                <div class="stars2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                 </div>
                                <p> Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.
                                     We use the freshest ingredients in preparing our food to provide the best quality and taste. Try our delicious food today! 
                                     <br>
                                     Location:Ghatkopar,Mumabi
                                     <br>
                                 Contact No.-6060606
                                    </p>
                                </div>
                                
                            </div>    
                            <div class="sub">
                                <div class="info">
                                    <img src="images/The Breakfast Clud.jpg" alt="Restaurants" style="width:100%">
                                    <h3>The Breakfast Club </h3>
                                    <div class="stars2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                     </div>
                                    <p> If you’re looking for a place where to relax and read some novels or whatever, this place would be the best. They have the best coffee available and even some fresh baked goods as well. The ambiance of this shop was so relaxing, and the staffs are highly capable. I could not ask for more because everything that ypu need is provided. 
                                        The interior is rich with original architectural details, gleaming hardwood floors, soaring columns, mahogany paneling and antique mirrors.
                                        <br>
                                        Location:Marine Lines
                                        <br>
                                    Contact No.-7070707
                                    </p>
                                    </div>
                                    
                                </div>    
                                <div class="sub">
                                    <div class="info">
                                        <img src="images/Cafe jack.jpg" alt="Restaurants" style="width:100%">
                                        <h3>Cafe Jack </h3>
                                        <div class="stars2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                         </div>
                                        <p>  This coffee shop is everyone's favorite place to hang and do their works. People really like this place because it has a good ambiance and not too crowded as well. The coffee and pastries that they have are so delicious. The barista is so friendly and pleasant to talk with. One thing that people get fascinated by this place. They have the most affordable and delicious coffee in town.
                                            <br>
                                            Location:Worli
                                            <br>
                                        Contact No.-8080808
                                        </p>
                                        </div>
                                       
                                    </div>    
                    <div class="clearfix"></div> -->
   



 
 



