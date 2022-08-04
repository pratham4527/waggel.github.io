<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    
    <title>Document</title>

<style>
        body{
            font-family: 'Baloo Bhai 2', cursive;
            /* background-color: black; */
            background-image: url(img/loginbg.jpg);
            background-size: cover;
            opacity: 1;

        }
        #regi-form{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            
        }
        #regi-form #w-img img{
            border: 40px solid #56c7f6;
            width: 60%;
        }
        #regi-form #w-img{
            text-align: center;
        }

        #regi-form form{
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 40px;
            align-items: center;
            color: white;
            margin-right: 80px;
            margin-top: 25px;
            
        }
        #regi-form form input{
            padding: 7px 20px;
            width: 68%;
            margin: 10px 15px;
            text-align: center;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 700;
            border: none;
        }
        .form-box{
            border: 5px solid white;
            /* padding: 30px 10px 30px 10px; */
            border-radius: 45px;
            padding: 30px 5px 30px 5px;
        }
        .form-box #sub{
            width: 76%;
            background-color: #1df110;
            color: black;
        }
        .form-box #sub:hover{
            background-color: #9226eb;
        }
        .form-box h6{
            font-size: 16px;
            margin: 0px;
            padding:10px;
        }
        .form-box h6 a{
            text-decoration: none;
        }
        .form-box h2{
            font-size: 40px;
            text-align: center;
            line-height: 50px;
            margin-top: 0px;
            margin-bottom: 40px;
            text-decoration: underline;

        }


            @media (max-width:1300px){

            #regi-form {
                flex-direction: column;
                padding: 12px 40px;
            }
            #regi-form #w-img img {
                width: 55%;
            }
            #regi-form form {
                width: 88%;
                margin: 40px;
                margin-right: 35px;
                margin-top: 45px;
            }
            /* .form-box img {
                width: 62%;
                margin-bottom: 20px;
            } */
            .form-box h2 {
                font-size: 35px;
                margin-top: 0px;
                margin-bottom: 15px;
            }
            #regi-form form input {
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

            #regi-form {
                flex-direction: column;
                padding: 5px 21px;
            }
            #regi-form #w-img img {
                width: 80%;
            }
            #regi-form #w-img img {
                border: 17px solid #56c7f6;
                /* width: 60%; */
            }
            #regi-form form {
                width: 88%;
                margin: 18px;
                /* margin-right: 30px; */
                margin-top: 45px;
            }
            /* .form-box img {
                width: 62%;
                margin-bottom: 20px;
            } */
            .form-box h2 {
                font-size: 27px;
                margin-top: 0px;
                margin-bottom: 15px;
                line-height: 32px;
            }
            #regi-form form input {
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
    
   <div id="regi-form">
    <div id="w-img">
        <img src="logo1.gif" alt="">
    </div>    

    <form method='POST' action='register.php' class='form-box'> 

        <h2>Register To Waggel</h2>

        <input name='uname' id="uname" placeholder="User Name" onchange="isEmpty()" class='form-control' required> 
        <input name='upass' id="upass" placeholder="Password" type='password' onchange="isEmpty()" class='form-control' required> 
        <input name='name' id="name" placeholder="Name" type='text' onchange="isEmpty()" class='form-control' required> 
        <input name='mobile' id="mobile" placeholder="Mobile" type='number' onchange="isEmpty()" class='form-control' required> 
        <input name='address' id="address" required placeholder="Address" onchange="isEmpty()" class='form-control'></input>

        <input type='submit' id="sub" class='form-control bg-success text-white'  value="REGISTER" disabled>

        <h6>Already have an account ? &nbsp;&nbsp; <a href="http://localhost/internship/loginform.php" target="_blank" >LogIn</a></h6>
    </form>
</div>

<script>


    function isEmpty(){
        let uname = document.getElementById("uname").value;
        let upass = document.getElementById("upass").value;
        let name = document.getElementById("name").value;
        let mobile = document.getElementById("mobile").value;
        let address = document.getElementById("address").value;

        // if(name!="" && file!="" && descri!=""){
        //     document.getElementById("upload").removeAttribute("disabled");
        // }

        
        if(uname!="" && upass!="" && name!="" && mobile!="" && address!=""){
            document.getElementById("sub").removeAttribute("disabled");
        }

    }   


</script>




</body>
</html>