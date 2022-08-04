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
</head>
<style>
    body{
        display: grid;
        align-content: center;
      
    }
    table{
        border-collapse: collapse;
        font-size:17px;
        margin: 40px 70px;
    }
    td,th{
        padding: 16px 30px;
        text-align: center;
    }
    thead{
        background-color: #a2d4ff;
        border-bottom:4px solid black;
        border-top:4px solid black;
   
    }
    tbody{
        border-bottom:2px solid black;
        background-color: aliceblue;
   
    }
</style>
<body>


<section id="header">
        <div id="logocomb">
        <img id="logo1" src="logo1withoutbg.png" alt="">
        <i id="cartlogo1" class="fa-solid fa-cart-shopping"></i>
    </div>
        <div>
            <ul id="navbar">
                <li><button class="barbtn" id="barclose" onclick="barfun2()"  ><i class="fa-solid fa-xmark"></i></button></li>
                <li><a href="index.php">View Products</a></li>
                <li><a href="produploadform.php">Upload Product</a></li>
                <li><a class="active" href="admin_view_orders.php">View Orders</a></li>
                <!-- <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li> -->
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
</script>
    
</body>
</html>





<?php

//start session
session_start();

//connection
$servername="localhost";
$username="root";
$password="";
$database="int123";

$conn=mysqli_connect($servername,$username,$password,$database);

//fetching or selecting the data from database to display on webpage
$sql = "SELECT * FROM `orders` where status='pending'";
$result = mysqli_query($conn,$sql);
echo "<br>";

echo "<table class='table'>
    
        <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Delivery Address</th>
                    <th>Mobile No.</th>
                    <th>Product Name</th>
                    <th>Change Status</th>
                </tr>
        </thead>

        
    ";


while($row=mysqli_fetch_assoc($result)){
  
    
    $myname=$row['name'];
    $myadd=$row['address'];
    $mymob=$row['mobile'];
    $myprod=$row['product'];
    $mystatus=$row['status'];


    echo "
        <tbody>
            <tr>
                <form method='POST' action='change_order_status.php'>
                    <td>$myname</td>
                    <td>$myadd</td>
                    <td>$mymob</td>
                    <td> <input name='myprod' value='$myprod' hidden> $myprod</td>   
                    <td> <button> Deliver </button> </td>
                </form>
            </tr>
        </tbody>";
    ?>
      
    
    
    
    <?php
    
}
echo"
</table>";  
    
?>



