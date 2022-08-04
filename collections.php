
        
        <?php
//connection
$servername="localhost";
$username="root";
$password="";
$database="int123";

$conn=mysqli_connect($servername,$username,$password,$database);

//check success of connection
// if($conn){
//     echo "connection is successful";
// }
// else{
//     echo "connection not successful because of error : ". mysqli_connect_error($conn);
// }

$name=$_POST['myname'];
// $descri=$_POST['mydescri'];
$price=$_POST['myprice'];
$fname=date('Y_m_d_h_i_s').'.jpg';
move_uploaded_file($_FILES['myfile']['tmp_name'],$fname);


$sql="INSERT INTO `collections` (`name`, `photo`, /*`descri`,*/ `price`) VALUES ('$name', '$fname', /*'$descri',*/ '$price');";
$sql_status=mysqli_query($conn,$sql);


 if($sql_status)
 {
    ?>

    <script> alert("Product Uploaded Successfully !")</script>
    
    <?php echo "<a href='produploadform.php'>Go To Product Upload Form</a>";
 }
 else
 {
     echo "Product Failed to Update!!";
 }

?>

    







        
