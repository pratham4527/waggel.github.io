<?php

session_start();


$servername="localhost";
$username="root";
$password="";
$database="int123";



$conn=mysqli_connect($servername,$username,$password,$database);

// check success of connection
// if($conn){
//     echo "connection is successful";
// }
// else{
//     echo "connection not successful because of error : ". mysqli_connect_error($conn);
// }


$myname=$_POST['myname'];
$myadd=$_POST['myadd'];
$mymob=$_POST['mymob'];

foreach($_SESSION['cart'] as $key=>$value)
          {
               $sql="INSERT INTO `orders` (`name`, `mobile`, `address`,`product`) VALUES ('$myname', '$mymob','$myadd', '$value[Item_name]' );";
               $res=mysqli_query($conn,$sql);
          }

// $sql="INSERT INTO `orders` (`name`, `mobile`, `address`) VALUES ('$myname', '$myadd', '$mymob');";
// $res=mysqli_query($conn,$sql);

if($res)
 {
    ?>

    <script> 
         alert("Order Placed Successfully!")
         window.location.href='http://localhost/internship/index.php'
    </script>

   <?php

               if(isset($_POST['finalplacebtn']))
               {
               foreach($_SESSION['cart'] as $key=>$value)
                    {
                    // print_r($key);
                         unset($_SESSION['cart'][$key]);
                    }
               }
   ?>
    
    <?php         
    
 }
 else
 {
    ?>

    <script> 
         alert("Failed to place the order. Try agin later")
         window.location.href='http://localhost/internship/place_order.php'
    </script>

    

     <?php


   
 }

?>

