<?php
session_start();
// session_destroy();
unset($_SESSION['username']);
//echo"<script> alert(`logged out successfully !`) </script>";
header('location:http://localhost/internship/loginform.php');
?>