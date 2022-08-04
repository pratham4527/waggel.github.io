<?php
$servername="localhost";
$username="root";
$password="";
$database="int123";

$conn=mysqli_connect($servername,$username,$password,$database);

$uname=$_POST['uname'];
$upass=$_POST['upass'];

// $sql="select * from users where username='$uname' and password='$upass'";
$sql = "SELECT * FROM `regi` WHERE username='$uname' and password='$upass'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);

if($count==0)
{
    echo "<script> alert('Invalid Credentials!') </script>";
}
else{
    session_start();
    $_SESSION['username']=$uname;    
    header('location:index.php');
    // print_r($_POST['uname']);
    // header('location:client_view_products.php');
}