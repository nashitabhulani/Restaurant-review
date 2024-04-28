<?php include('folder1/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant-Reviews</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!--<body class="image1"background="https://th.bing.com/th/id/OIP.lkgB8It_IKaNvGGhQprDuAHaEK?w=263&h=180&c=7&r=0&o=5&pid=1.7">-->
<body class="color" background="#fff8dc"></body>
   </body>
   <!-- Navbar section begins here-->
   <section class="navbar">
      <div class="container">
         <!--logo-->
         <div class="logo">
            <img class="background-image"src="images/Green Coral Modern Food Logo.jpg" alt="Logo">
       </div>
      <!--logo-->
        <div class="menu">
           <ul>
            <li>
                <a href="<?php echo SETURL; ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo SETURL; ?>reviews.php">Reviews</a>
            </li>
            <li>
                <a href="<?php echo SETURL; ?>restaurants.php">Restaurants</a>
            </li>
            <li>
                <a href="<?php echo SETURL; ?>logout.php">Logout</a>
</li>
            <li>
                <a href="<?php echo SETURL; ?>admin.php">Admin</a>
            </li>
            <li>
               <div class="dropdown">
                  <button class="dropbtn">Contact us
                     <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                     <a href="#">restaurant-review@yahoo.com</a>
                     <a href="#">Phone number:  010101999</a>
                     <a href="#">reviewcustomercare@yahoo.com</a>
               </div>
               </div>
                
            </li>
           
           </ul>

        </div>
        <div class="clearfix"></div>
        </div>
      
      
    
 
   </section>