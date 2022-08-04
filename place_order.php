<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>place order</title>
 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  </head>

  <style>
body{
    margin:0px;
    padding:0px;
    /* background-color: white; */

}

    #orderform{
        border: 2px solid black;
        border-radius:10px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        width: fit-content;
        padding: 60px 40px;
        position: absolute;
        top: 23%;
        left: 37%;
        align-items:center;
        background-color: white;
        background-color: #ffe19b;
        background-color: #ce93d833;


    }

    #orderform input{
        margin:10px;
        border-radius:2px;

    }

    #orderform button{
        margin: 10px 10px;
        font-size: 15px;
        /* border: 2px solid black; */
        padding: 2px 6px;
        background-color: #3f60f7;
        color: white;
        /* cursor: pointer; */
    }
    



  </style>
  <body>
  
  
<section id="header" style="width:100%">
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
                    
                    <li style="padding: 1px 0px 1px 5px; cursor:pointer;">
                            <?php echo $_SESSION['username']?>
                    </li>
                    
                    <li style="padding: 1px 6px 1px 5px;" >
                        <form action='logout.php'>
                            <button style="padding:0px 4px ; background-color: transperent; color: white; background-color: transparent; border: 2px solid white; font-size: 15px; font-family: 'Baloo Bhai 2'; cursor:pointer;"  > Logout </button>
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
                        <a  name="cart"; style="padding:0px 4px ; background: none; color: white; border:none;cursor:pointer"  href="http://localhost/internship/mycart.php" target="_blank"><i class="fa-solid fa-cart-shopping"></i><?php echo $count?> </a>
                    </li>

                
                </ul>
                
            </div>
        <div id="mobile">
        <button class="barbtn" onclick="barfun1()"><i class="fa-solid fa-bars"></i></i></button> 
        </div>
</section>

<div id="orderform" >

<h2>Delivery Details</h2>
        <h6>Confirm your details</h6>
    <form action="ordertodb.php" method="POST">
        
        <input type="text" name="myname" id=""  placeholder="Name"  required><br>
        <input type="text" name="myadd" placeholder="Adress" required><br>
        <input type="number" name="mymob" id="" placeholder="Mobile No." required><br>
        <input type="checkbox" name="" id="">Cash on delivery <br><br>
        <button name="finalplacebtn" onclick="order()">Place Order</button>

    </form>
</div>





   
  

</body>
</html>