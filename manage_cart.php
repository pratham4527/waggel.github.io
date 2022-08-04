<?php
//start session
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <!-- <button name="cart"; style="padding:0px 4px ; background: none; color: white; border:none;cursor:pointer" onclick=cartfun()><i class="fa-solid fa-cart-shopping"></i>(0)</button> -->
                    <a  name="cart"; style="padding:0px 4px ; background: none; color: white; border:none;cursor:pointer"  href="http://localhost/internship/manage_cart.php" target="_blank"><i class="fa-solid fa-cart-shopping"></i>(0)</a>
                </li>

               
            </ul>
            
        </div>
       <div id="mobile">
       <button class="barbtn" onclick="barfun1()"><i class="fa-solid fa-bars"></i></i></button> 
       </div>
</section>


<script>
    let len1=document.getElementById("navbar").style.right;

    function barfun1(){
        document.getElementById("navbar").style.right="0px";
    }

    function barfun2(){
        document.getElementById("navbar").style.right="-300px";
    }

    // function cartfun(){
    //     window.location.href='http://localhost/internship/manage_cart.php';
        
    // }
</script>

</body>
</html>





<?php
    // echo "<script>
    // alert('alerted successfully');
    // </script>";
    
    

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['addbtn']))
        {
            if(isset($_SESSION['cart']))
            {
                $myitems=array_column($_SESSION['cart'],'Item_name');
                if(in_array($_POST['prod_name'],$myitems))
                {
                    echo "<script>
                         alert('Item already added');
                         window.location.href='index.php';
                         </script>";
                }
                else
                {
                    $count=count($_SESSION['cart']);
                    $_SESSION['cart'][$count]=array('Item_name'=>$_POST['prod_name'],'Item_price'=>$_POST['prod_price'],'Qunt'=>1);
                    print_r($_SESSION['cart']);
                    echo "<script>
                        alert('Item added succefully ');
                         window.location.href='http://localhost/internship/index.php';
                         </script>";
                }
        
            }

            else
            {
                $_SESSION['cart'][0]=array('Item_name'=>$_POST['prod_name'],'Item_price'=>$_POST['prod_price'],'Qunt'=>1);
                echo "<script>
                    alert('Item added succefully ');
                     window.location.href='http://localhost/internship/index.php';
                     </script>";
            }

        }
        if(isset($_POST['remove_item']))
        {
            foreach($_SESSION['cart'] as $key=>$value)
            {
                // print_r($key);
                if($value['Item_name']==$_POST['Item_name'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "
                    <script>
                    alert('Item removed')
                    window.location.href='http://localhost/internship/mycart.php?options=on';
                    </script>
                    ";
                }
                
            }
        }
    }
    
        
?>









