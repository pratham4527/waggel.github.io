<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
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

   


    <div class="container text-center">

        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-info my-5 pt-2 font-weight-bold">
                <h1>MY CART</h1>
            </div>


            <div class="col-lg-9">

                <table class="table table-hover">
                <thead class="text-center">
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Price</th>
                    <!-- <th scope="col">Quantity</th> -->
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody class="text-center">
                    
                    <?php
                    $total=0;
                    $num=0;
                    if(isset($_SESSION['cart']))
                    {
                        
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $total = $total + (float)$value['Item_price'];
                            $num++;
                            // $_SESSION['numvar'];
                            // print_r($value);
                            echo"
                            <tr>
                                <td>$num</td>
                                <td>$value[Item_name]</td>
                                <td>$value[Item_price]</td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button name='remove_item' class='btn btn-outline-danger btn-sm py-1'>Remove</button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>

            
                
                </tbody>
                </table>

            </div>

            <div class="col-lg-3">
                <div class="border rounded py-4 px-5" style="background:white; border: 3px solid black!important;">
                    <h3 >Total &nbsp :- &nbsp  <?php echo $total ?></h3>
                    
                    <form action="">
                        
                        <div class="btn-group my-3 py-0 btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-light btn-outline-secondory ">
                                <input type="radio" class="text-start" name="options" id="option1" autocomplete="off" checked> Cash on dilevery
                            </label>
                        </div>
                        
                        <!-- <button <a href="place_order.php"> onclick="location='place_order.php'" class="btn bg-primary btn-lg btn-block py-2 text-light ">Place Order </a></button> -->
                         <a href="place_order.php" class="btn bg-primary btn-lg btn-block py-2 text-light ">Place Order </a>

                      


                           







                    </form>
                </div> 
            </div>
        </div>
    </div>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <script>
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