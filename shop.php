<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="index3.css">
    <link rel="stylesheet" href="displayproduct.php">
    <link rel="stylesheet" href="displayproduct.php">


    <style>
        .box {
            height: 440px!important;
        }
        #prod_img {
            margin-top: -36px!important;
            margin-bottom: 7px!important;
        }    
        #prod_price {
            margin: -7px!important;
            margin-bottom: -100px!important;
            padding-top: 5px!important;
        }
        .fa-cart-arrow-down:before {
            bottom: 25px!important;
            right: 24px!important;
        }
        #cloths-slider1 {
            
            margin: 20px 0px 0px 0px!important;
            width: 100%!important;
            background-size: 100%;
            background-position: center!important;
        }
        
        @media (max-width:820px) {
            #cloths-slider1 {
                
                border: none;
                margin: 20px 0px 0px 0px!important;
                padding: 0px;
                height: 40vh;
                padding-right: -27px!important;
                background: url(img/Slider_01.jpg);
                width: 100%!important;
                background-size: 100%;
                background-position: center!important;
                background-repeat: no-repeat;
                position: relative;
            }
        }


    </style>

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
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blogs.html">Blogs</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="http://localhost/internship/loginform.php" target="_blank"><i class="fa-solid fa-user"></i></a></li>
                <li style="padding: 1px 0px 1px 5px; cursor:pointer;background-color: black;">
                        <?php echo $_SESSION['username']?>
                </li>
                <li style="padding: 1px 5px 1px 5px;" >
                <li style="padding: 1px 1px 1px 0px;" >
                <form action='logout.php'>
                    <button style="padding:0px 4px ; background-color: transperent; color: white; background-color: black;border: 2px solid white; font-size: 15px; font-family: 'Baloo Bhai 2'; cursor:pointer;"  > Logout </button>
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
                        <a  name="cart"; style="padding:0px 4px ; background: none; color: skyblue; border:none;cursor:pointer"  href="http://localhost/internship/mycart.php" target="_blank"><i class="fa-solid fa-cart-shopping"></i><?php echo $count?> </a>
                </li>


            </ul>
            
        </div>
       <div id="mobile">
       <button class="barbtn" onclick="barfun1()"><i class="fa-solid fa-bars"></i></i></button> 
       </div>
</section>

<section>
        <div id="sliderbox">
       
        <img class="slideimages" id="shop_sl1" src="img/shopb32.jpg" alt="" >
    </div>

    <div id="mobile-slider">
        <img class="slideimages" id="mob-sl1" src="img/banner/mob2.jpg" alt="" >
    </div>

</section>


<section >

        <!-- <h1 style="text-align:center; margin-top:37px; font-size:45px ; margin-bottom: 10px">Featured Products</h1> -->
      

        <div  class="container1">
            
                <?php 
               
                include 'displayprod.php';
               
                echo "<div >";
                include 'collectionsdisplayprod.php';
                echo"</div>";


                    // include 'collectionsdisplayprod.php';
                ?>
    
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



<script>

function s_first() {
     document.getElementById("shop_sl1").src="img/shopb22.jpg"
  }
function s_second() {
     document.getElementById("shop_sl1").src="img/shopb12.jpg"
  }
function s_third() {
     document.getElementById("shop_sl1").src="img/shopb32.jpg"
  }


  setInterval(s_first,4000);
  setInterval(s_second,8000);
  setInterval(s_third,12000);


  // slider for home page - mobile

function mob_second() {
        document.getElementById("mob-sl1").src="img/banner/m2.png"
     }
function mob_third() {
        document.getElementById("mob-sl1").src="img/banner/ha3.jpg"
     }
function mob_forth() {
        document.getElementById("mob-sl1").src="img/banner/b4bt4.png"
     }
function mob_fifth() {
        document.getElementById("mob-sl1").src="img/banner/m3.jpeg"
     }


     setInterval(mob_second,4000);
     setInterval(mob_third,8000);
     setInterval(mob_forth,12000);
     setInterval(mob_fifth,16000);



let len1=document.getElementById("navbar").style.right;

function barfun1(){
                document.getElementById("navbar").style.right="0px";
}

function barfun2(){
                document.getElementById("navbar").style.right="-300px";
}


</script>



</body>
</html>



<?php

?>