<?php

//start session
// session_start();

//connection
$servername="localhost";
$username="root";
$password="";
$database="int123";

$conn=mysqli_connect($servername,$username,$password,$database);

//check success of connection
// if($conn){
//     echo "connection is successful";
// }
// else{
//     echo "connection not successful because of error : ". mysqli_connect_error($conn);
// }

//fetching or selecting the data from database to display on webpage
$sql = "SELECT * FROM `int123` where type='general'";
$result = mysqli_query($conn,$sql);
echo "<br>";


while($row=mysqli_fetch_assoc($result)){
  
    

    $prod_name=$row['name'];
    $prod_img=$row['photo'];
    $prod_descri=$row['descri'];
    $prod_price=$row['price'];
    $prod_id=$row['sno'];

    
// if(isset($_POST['addbtn'])){
//     print_r($_POST[$prod_name]);
// }
    
    
    
    
    
    ?>
    
    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>

        .container{
            /* display:inline-flex; */
            
        }
        .box{
            border:3px solid white;
            border-radius:21px;
            width:290px;
            height:450px;
            margin:18px;
            align-items:center;
            justify-content: center;
            background: #eeeeee;
            display:flex;
            flex-direction: column;
            position: relative;
            
            /* box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px; */
            box-shadow:rgb(0 0 0 / 137%) 6px 2px 16px 0px, rgb(255 255 255 / 70%) -6px -2px 16px 0px;
        }
        /* .box2{
            display:none;
        }
        .container2{
            display:none;
        } */
        #prod_name{
            /* float: left; */
            /* grid-area:prod_name; */
            text-align: center;
            margin: 4px;
        }
        #prod_price{
            /* float: right; */
            /* grid-area:prod_price; */
            text-align: center;
            margin: -7px ;
            margin-bottom:-100px;
        }

        #prod_img{
            display:inline-block;
            /* grid-area:prod_img; */
            width: 235px;
            height: 235px;
            margin-top: -41px;
            border: 2px solid white;
            border-radius: 21px;   
            box-shadow: rgb(9 30 66 / 25%) 0px 4px 8px -2px, rgb(9 30 66 / 8%) 0px 0px 0px 1px;
            margin-bottom: 7px;
        }

        #prod_img:hover{
            box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;


        }

        #prod_descri{
            grid-area:prod_descri;
            text-align: center;
            margin: -5px 1px 7px 1px;
            font-size:16px;
            line-height: 21px;
            padding: 0px 4px 0px 4px;



        }
        #prod_rating{
            grid-area:prod_rating;
            text-align:center;
        
        }

        span{
            display: inline-block;
            text-align: center;
        }

        .fa-star {
            content: "\f005";
            color: gold;
        }

        .fa-cart-arrow-down:before {
            content: "\f218";
            color: #34038;
            /* border: 2px solid; */
            background-color: #97d0ff;
            padding: 7px;
            position: absolute;
            bottom: 26px;
            right: 20px;
            font-size: 27px;
            border-radius: 31px;
        }





        #addtocart{
            background-color: #2e355c;
            padding: 10px;
            position: absolute;
            bottom: 27px;
            right: 20px;
            font-size: 15px!important;
            border-radius: 25px;
            border:none;
            cursor: pointer;
        }

        #addtocart:hover{
            background-color: black;
        }

        .fa-cart-shopping:before, .fa-shopping-cart:before {
            content: "\f07a";
            font-size: 21px;
            margin: 0px;
            padding: 0px;
            color:#ffeb3b;
        }


        @media (max-width:820px){
            .container1{
                display:flex;
                justify-content:center;
            }
            /* .container2{
            display:none;
        } */
            .slideimages{
                width: 100%;
                height: 20vh;
                margin-top: 0px;
            }
            
            
            .box {
                width: 239px;
                height: 405px;
                margin: 18px 10px;
            }
            #prod_img {
                width: 180px;
                height: 180px;
                margin-top: -28px;
                margin-bottom: 7px;
            }
            #addtocart {
                bottom: 18px;
                right: 11px;
            }

            
            #prod_name{
                margin:2px;
            }
            .box2{
                display:none;
            }
        }

        /* @media (max-width:415px){
            .box{
                display:none;
            }
            .box2{
                display:flex;
                flex-direction:row;
            }
        } */

        @media (max-width:415px){
            /* #header {
                width: 205%;
                height: 8vh;
            }
            .slideimages {
     
                    width: 164%;
                height: 59vh;
                    margin-top: 7px;
                }
                #mobile-slider{
                    display: flex;
                    width: 136%;
                }
                #sliderbox{
                    display: none;
                }
    
            .container1{
                display:flex;
                justify-content:center;
                margin-left:100px;
            }   
            .container{

            }
            .box{
              
                margin-left:407px;
                width: 420px;
            height: 610px;
            }
            #prod_img {
            width: 270px;
            height: 300px;
            margin-top: -22px;
            }
            #prod_name{
                font-size: 36px;
            }
            #prod_descri{
                font-size: 27px;
                line-height: 38px;
            }
            .fa-star:before {
                content: "\f005";
                font-size: 30px;
            }
            #prod_price {
                margin: -2px;
                font-size: 36px;
                margin-bottom: -100px;
            }
            .fa-cart-arrow-down:before{
                font-size:42px;
            }
            .fa-bars:before, .fa-navicon:before {
                content: "\f0c9";
                font-size: 25px;
            }
            .banner {
                height: 29vh;
                width: 219%;
            }
            .banner h4 {
                font-size: 31px;
                margin-bottom: 10px;
                margin-top: -5px;
            }
            .banner h2 {
                margin-bottom: 6px;
                margin-top: -32px;
                font-size: 40px;
            }
            .btn {
                font-size: 19px;
                padding: 14px 18px;
                margin-top: -12px;
            }
            #banner2 .banner-box{
                height: 34vh;            
                padding: 35px 47px;
                margin: 45px 111px;
            }
            
            .fa-cart-shopping:before, .fa-shopping-cart:before {
                content: "\f07a";
                font-size: 38px;
              
            }
            #addtocart {
                bottom: 23px;
                right: 28px;
            }
           
            footer{
                width: 205%;
            }
            #copyright {
                margin-right: -281px;
                width: 220%;
            }
            #header {
    width: 100%;
    height: 8vh;
} */





            /* --------------- */

body {
    margin: 0px;
    padding: 0px;
}
.slideimages {
    width: 100%;
    height: 30vh;
    margin-top: 0px;
}
.container1 {
    display: flex;
    justify-content: center;
    margin: 0px;
    align-items: center;
    text-align: center;
}
.box {
    display: flex;
    margin: 21px 0px;
    padding: 3px 4px;
    width: 321px;
    height: 493px;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
#prod_img {
    width: 220px;
    height: 220px;
    margin-top: 0px;
}
#prod_name {
    font-size: 25px;
}
#prod_descri {
    font-size: 20px;
    line-height: 28px;
}
.fa-star:before {
    content: "\f005";
    font-size: 24px;
}
#prod_price {
    margin: 0px;
    font-size: 30px;
    margin-bottom: 0px;
}
#addtocart {
    bottom: 41px;
    right: 16px;
}
.banner {
    height: 34vh;
    width: auto;
}
footer {
    width: 85%;
}
#copyright {
    margin-right: 0px;
    width: 100%;
}
    #mobile-slider {
    display: flex;
    width: 100%;
}
#header {
    width: 85%;
    height: 8vh;
}
#banner2 .banner-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    height: 50vh;
    background-size: cover;
    background-position: center;
    padding: 30px;
    height: 24vh;
    margin: 0px 0px;
    width: 85%;
    min-width: 290px;
}
#banner2 {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: column;
    /* align-content: center; */
    align-items: center;
}
#banner2 .banner-box h2 {
    color: white;
    font-size: 35px;
    margin-top: -16px;
    margin-bottom: 0px;
}
#banner2 .banner-box span {
    margin-top: -14px;
    color: white;
    font-size: 16px;
}
#navbar {
       
       right: -314px;
     
   }
#unamedisplay{
    color:black;
    background-color:transparent!important;
    padding: 1px 0px 1px 25px!important;
}
#logoutbtn_nav{
    padding: 1px 0px 1px 25px!important;
}
#cartnum{
    padding: 1px 0px 1px 5px!important;

}


        }


</style>
    </head>
  
    <body>


    <!-- <?php echo $prod_id?> -->
<!-- for tab and laptop -->
    <div class="container" >
        <div class="box">
          
            <img id="prod_img"  src=" <?php echo $prod_img?> " width="100" height="100">
            <h3 id="prod_name"><?php echo $prod_name ?></h3>  
            <p  id="prod_descri"><?php echo $prod_descri?></p>
            
            <div>
                <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                <span> <i id="prod_rating" class="fa-regular fa-star"></i></span>
            </div>
                
            <h3 id="prod_price"><?php  echo "Rs ". $prod_price?></h3> <br><br>
            <!-- <a href="#"><i id="addtocart" class="fa-solid fa-cart-arrow-down"></i></a> -->
            <form action="manage_cart.php" method="POST">
            <!-- <form action="displayprod.php" method="POST"> -->
            <button id="addtocart" name="addbtn"> <i class="fa-solid fa-cart-shopping"></i> </button>
            <input type="hidden" name="prod_price" value=" <?php echo $row['price']?> " >
            <input type="hidden" name="prod_name" value=" <?php echo $row['name']?> " >
          
            </form>
           
          
          
            <!-- <button><i id="addtocart" class="fa-solid fa-cart-arrow-down"></i></button> -->
        
        </div>
    </div>
<!-- for mobile -->
    <!-- <div class="container2" >
        <div class="box2">
            <div>
                <img id="prod_img"  src=" <?php echo $prod_img?> " width="100" height="100">
                <h3 id="prod_name"><?php echo $prod_name ?></h3> 
            </div>
            
            <div>
                <p  id="prod_descri"><?php echo $prod_descri?></p>
                <div>
                    <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                    <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                    <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                    <span> <i id="prod_rating" class="fa-solid fa-star"></i></span>
                    <span> <i id="prod_rating" class="fa-regular fa-star"></i></span>
                </div>
            <h3 id="prod_price"><?php  echo "Rs ". $prod_price?></h3> <br><br>
            <a href="#"><i id="addtocart" class="fa-solid fa-cart-arrow-down"></i></a>
        </div>
    </div> -->

    </body>
    





    <script>

    </script>


    </html>
   
    
    
    
    
    <?php
    
}
?>

<!-- D9D5D0 -->
