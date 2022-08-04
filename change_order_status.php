<?php
// include_once 'connection.php';
$servername="localhost";
$username="root";
$password="";
$database="int123";

$conn=mysqli_connect($servername,$username,$password,$database);


$myprod=$_POST['myprod'];

// $cmd="UPDATE `orders` SET `status`='delivered' where status='pending'";
$cmd="UPDATE `orders` SET `status`='delivered' where product='$myprod'";

$res=mysqli_query($conn,$cmd);
if($res)
{
    header('location:admin_view_orders.php');
}
else
{
    echo "Update Failed";
}

?>