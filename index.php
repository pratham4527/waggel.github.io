<?php
session_start();

if(!isset($_SESSION['username']))
{
    echo "<h1 style='color:tomato'>Login to Access this Page</h1>";
    die;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="index3.css">
</head>
<body>

<section id="header">
        <div id="logocomb">
        <img id="logo1" src="logo1withoutbg.png" alt="">
        <i id="cartlogo1" class="fa-solid fa-cart-shopping"></i>
    </div>
        <div>
            <ul id="navbar">
                <li><button class="barbtn" id="barclose" onclick="barfun2()"  ><i class="fa-solid fa-xmark"></i></button></li>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blogs.html">Blogs</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li style="padding: 1px 0px 1px 25px;"><a href="http://localhost/internship/loginform.php" target="_blank"><i class="fa-solid fa-user"></i></a></li>
                
                <li id='unamedisplay' style="padding: 1px 0px 1px 5px; cursor:pointer; background-color: black;" >
                        <?php echo $_SESSION['username']?>
                </li>
                
                <li id='logoutbtn_nav' style="padding: 1px 6px 1px 5px;" >
                    <form action='logout.php'>
                        <button   style="padding:0px 4px ;color: white; background-color: black; border: 2px solid white;  font-size: 15px;  font-family: 'Baloo Bhai 2';  cursor:pointer;" > Logout </button>
                    </form>
                </li>
                
                <li style="padding: 1px 5px 1px 14px; cursor:pointer;">
                    <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                            {
                                $count=count($_SESSION['cart']);
                            }    
                                     
                    ?>
                    <a  name="cart"; id='cartnum'  style="padding:0px 4px ; background: none;   color: skyblue; border:none; cursor:pointer;" href="http://localhost/internship/mycart.php" target="_blank"><i class="fa-solid fa-cart-shopping"></i> <?php echo $count?> </a>
                </li>

               
            </ul>
            
        </div>
       <div id="mobile">
       <button class="barbtn" onclick="barfun1()"><i class="fa-solid fa-bars"></i></i></button> 
       </div>
</section>

















<section>
        <div id="sliderbox">
       
        <img class="slideimages" id="sl1" src="l5cut.jpg" alt="" >
    </div>

    <div id="mobile-slider">
        <img class="slideimages" id="mob-sl1" src="img/banner/mob2.jpg" alt="" >
    </div>

</section>



<section >

        <h1 style="text-align:center; margin-top:37px; font-size:45px ; margin-bottom: 10px">Featured Products</h1>


        <div class="container1">
            
                <?php 
                    include 'displayprod.php';
                ?>
    
        </div>

        
        
    
</section>



<section class="banner">
    <h4>Repair Services</h4>
    <h2>Get Up to <span>50% Off</span> - on elctronics items </h2>
    <!-- <button onclick="exploremore()" class="btn">Explore More</button> -->
    <a class="btn" href="http://localhost/internship/electronicsdisplayprod.php" target="_blank">Explore More</a>
</section>




<section id="banner2">
    <div class="banner-box " id="box1">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at waggel</span>
        <a class="btn1" >Learn More</a>
    </div>

    <div class="banner-box " id="box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>The best classic dress is on sale at waggel</span>
        <a  class="btn1" href="http://localhost/internship/collectionsdisplayprod.php" target="_blank">Collections</a>
    </div>
</section>




<section id=features-box >
    <p id= "whychooseus">WhyChooseUs?</p>    
    <div class="features">
       
        <div class="f">
            <img src="freeshipping.png" alt="">
            <div class="f-title">Free Shipping</div>
        </div>
       
        <div class="f">
            <img src="online order.jpg" alt="">
            <div class="f-title">Online Order</div>
        </div>
        <div class="f">
            <img src="promotions.jpg" alt="">
            <div class="f-title">Promo Coupons</div>
        </div>
        <div class="f">
            <img src="fast dilevery.jpg" alt="">
            <div class="f-title">Fast Delivery</div>
        </div>
        <div class="f">
            <img src="save money.png" alt="">
            <div class="f-title">Save Money</div>
        </div>
        
    </div>
</section>




<section>

    <footer>
    
        <div class="col">
            <div id="logocomb">
                <img id="logo1" src="logo1withoutbg.png" alt="">
                <i id="cartlogo1" class="fa-solid fa-cart-shopping"></i>
            </div >
            <h4 class="ftitle">Contact</h4>
            <p class="fcontact"><strong>Address: </strong> 45 M. R. Road, Sector 5, Matunga East, Mumbai</p>
            <p class="fcontact"><strong>Phone: </strong> +01 4545 273 / +91 9453934880 </p>
            <p class="fcontact"><strong>Hours: </strong> 10:00 - 10:00, Mon - Fri</p>
            <div class="follow" class="fcontact">
                <h4 class="ftitle" id="followus">Follow us </h4>
                <div class="fcontact" >
                    <i class="fab fa-facebook-f"></i>&nbsp;
                    <i class="fab fa-twitter"></i>&nbsp;
                    <i class="fab fa-instagram"></i>&nbsp;
                    <i class="fab fa-youtube"></i>&nbsp;
                </div>
            </div>
        </div>

        <div class="col">
            <h4 class="ftitle">About</h4>
            <a href="http://localhost/internship/about.html">About Us</a>
            <a href="#">Delivery Status</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="http://localhost/internship/contact.html">Contact us</a>
        </div>

        <div class="col">
            <h4 class="ftitle">My Account</h4>
            <a href="http://localhost/internship/loginform.php" target="_blank">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col">
            <h4 class="ftitle">Install App</h4>
            <p class="fapp">From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p class="fapp">Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

    </footer>

    <div >
        <!-- <p id="copyright">Copyright@ 2022-23 www.waggel.com</p> -->
        <p id="copyright"> © &nbsp;2022-2023, &nbsp;www.waggel.com</p>
    </div>
     
</section>



    <script src="script.js">
    </script>
   
   
</body>
</html>


