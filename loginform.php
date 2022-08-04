<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    

<style>
body{
    font-family: 'Baloo Bhai 2', cursive;
    /* background-color: black; */
    background-image: url(img/loginbg.jpg);
    background-size: cover;
    opacity: 1;

}
/* body:before{
    content: "";
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: -1;
    background-image: url(img/bglog.jpg);
    background-size: cover;
    opacity: 0.5;
} */
#login-form{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    
}
#login-form #w-img img{
    border: 40px solid #56c7f6;
    width: 60%;
}
#login-form #w-img{
    text-align: center;
}

#login-form form{
    display: flex;
    flex-direction: column;
    width: 60%;
    margin: 40px;
    align-items: center;
    color: white;
    margin-right: 80px;
    margin-top: 25px;
    
}
#login-form form input{
    padding: 9px 20px;
    width: 76%;
    margin: 10px 15px;
    text-align: center;
    border-radius: 25px;
    font-size: 18px;
    font-weight: 700;
    border: none;
}
.form-box{
    border: 5px solid white;
    padding: 30px 10px 30px 10px;
    border-radius: 45px;
}
.form-box h2{
    font-size: 40px;
    text-align: center;
    line-height: 50px;
    margin-top: 0px;
    margin-bottom: 15px;
}
.form-box #sub{
    width: 83%;
    background-color: #1df110;
}
.form-box #sub:hover{
    background-color: #9226eb;
}
.form-box img{
    width: 70%;
    margin-bottom: 30px;
}
.form-box h6{
    font-size: 16px;
    margin: 0px;
    padding:10px;
}
.form-box h6 a{
    text-decoration: none;
}

@media (max-width:1300px){

#login-form {
    flex-direction: column;
    padding: 12px 40px;
}
#login-form #w-img img {
    width: 55%;
}
#login-form form {
    width: 88%;
    margin: 40px;
    margin-right: 35px;
    margin-top: 45px;
}
.form-box img {
    width: 62%;
    margin-bottom: 20px;
}
.form-box h2 {
    font-size: 35px;
    margin-top: 0px;
    margin-bottom: 15px;
}
#login-form form input {
    padding: 8px 20px;
    width: 66%;
    margin: 8px 15px;
    font-size: 17px;
}
.form-box #sub {
    width: 73%;
}
.form-box {
    padding: 21px 10px 21px 10px;
}

}
@media (max-width:450px){

#login-form {
    flex-direction: column;
    padding: 5px 21px;
}
#login-form #w-img img {
    width: 80%;
}
#login-form #w-img img {
    border: 17px solid #56c7f6;
    /* width: 60%; */
}
#login-form form {
    width: 88%;
    margin: 18px;
    /* margin-right: 30px; */
    margin-top: 45px;
}
.form-box img {
    width: 62%;
    margin-bottom: 20px;
}
.form-box h2 {
    font-size: 27px;
    margin-top: 0px;
    margin-bottom: 15px;
    line-height: 32px;
}
#login-form form input {
    padding: 3px 20px;
    width: 81%;
    margin: 6px 15px;
    font-size: 15px;
}
.form-box #sub {
    width: 94%;
}


}

</style>



</head>
<body>

    <div id="login-form">
        <div id="w-img">
            <img src="logo1.gif" alt="">
        </div>
        
        <form method='POST' action='login.php' class='form-box'>

            <img src="laphand.png" alt="">

            <h2>Welcome To The Best Online Shop</h2>

            <input name='uname' placeholder="User Name" required> 
            
            <input name='upass' placeholder="Password" type='password'  required> 
            
            <input  name="logsub" type='submit' value='LOG IN' id="sub">
            <!-- <input type="hidden" name="username" value=" <?php echo $row['uname']?> " > -->
        
            <h6>Need an account ? &nbsp;&nbsp; <a href="http://localhost/internship/registerFORM.php" target="_blank" >Register</a></h6>
  
        </form>
    </div>
    
</body>
</html>