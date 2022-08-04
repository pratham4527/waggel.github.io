<?php

$servername="localhost";
$username="root";
$password="";
$database="int123";



$conn=mysqli_connect($servername,$username,$password,$database);


$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$csubject=$_POST['csubject'];
$cmssg=$_POST['cmssg'];
// $address=$_POST['address'];


$sql="INSERT INTO `contactus`( `name`, `email`, `subject`, `message`) VALUES ('$cname','$cemail','$csubject','$cmssg');";
$res=mysqli_query($conn,$sql);

if($res)
 {
    ?>

    <script> 
        alert("Message Sent Successfully !");
        window.location.href='http://localhost/internship/contact.html';
    </script>
    
    
    
 }
 else
 {
    ?>

    <script> alert("Failed to send message. Try again later ")</script>

     <?php
 }

?>

