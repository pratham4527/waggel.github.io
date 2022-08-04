<?php

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


$uname=$_POST['uname'];
$upass=$_POST['upass'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$sql="INSERT INTO `regi` (`username`, `password`, `name`, `address`, `mobile`) VALUES ('$uname', '$upass', '$name', '$address', '$mobile');";
$res=mysqli_query($conn,$sql);

if($res)
 {
    ?>

    <script> 
         alert("Registered Successfully !")
         window.location.href='http://localhost/internship/loginform.php'
    </script>
    
    <?php 
    
 }
 else
 {
    ?>

    <script> 
         alert("Failed to register.  Username already taken")
         window.location.href='http://localhost/internship/registerFORM.php'
    </script>

     <?php
 }

?>

