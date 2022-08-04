<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
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
                    
                    <li style="padding: 1px 0px 1px 5px; cursor:pointer;">
                            <?php echo $_SESSION['username']?>
                    </li>
                    
                    <li style="padding: 1px 6px 1px 5px;" >
                        <form action='logout.php'>
                            <button style="padding:0px 4px ; background-color: transperent; color: white; background-color: transparent; border: 2px solid white; font-size: 15px; font-family: 'Baloo Bhai 2'; cursor:pointer;"  > Logout </button>
                        </form>
                    </li>
                    
                    <li style="padding: 1px 5px 1px 14px; cursor:pointer;">
                        <!-- <button onclick="cartfun()"; target="_blank" ; name="cart"; style="padding:0px 4px ; background: none; color: white; border:none;cursor:pointer"  href="http://localhost/internship/manage_cart.php"><i class="fa-solid fa-cart-shopping"></i>(0)</button> -->
                        <a  name="cart"; style="padding:0px 4px ; background: none; color: white; border:none;cursor:pointer"  href="http://localhost/internship/mycart.php" target="_blank"><i class="fa-solid fa-cart-shopping"></i>(0)</a>
                    </li>

                
                </ul>
                
            </div>
        <div id="mobile">
        <button class="barbtn" onclick="barfun1()"><i class="fa-solid fa-bars"></i></i></button> 
        </div>
</section>

   


    <div class="container">

        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>


        <div class="col-lg-g">

            <table class="table table-hover">
            <thead class="text-center">
            <tr>
                <th scope="col">Sr. No.</th>
                <th scope="col">Item Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="text-center">
                
                <?php
                
                if(isset($_SESSION['cart']))
                {
                    $total=0;
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        $total = $total + $value['Item_price'];
                        // print_r($value);
                        echo"
                        <tr>
                            <td>1</td>
                            <td>$value[Item_name]</td>
                            <td>$value[Item_price]</td>
                            <td><input class='text-center' type='number' value='$value[Qunt]' min='1' max='9'></td>
                            <td><button class='btn btn-sm btn-outline-danger py-1'>Remove</button></td>
                        </tr>
                        ";
                    }
                }
                ?>

         
            
            </tbody>
            </table>

        </div>

        <div class="col-lg-4">
            <h3>Total : </h3>
            <h5><?php echo $total ?></h5>

        </div>
    </div>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>