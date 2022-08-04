<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Product Upload</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    
<style>
            body {
            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            display: flex;
            background-color: rgb(112 112 112 / 73%);
            color: white;
            font-size: 22px;
            font-weight:bold;
            }

        /* .container1{
            width: 500px;
            height: 900px;
            border: 2px solid white;
            background-color: rgb(0, 0, 0);
        } */
       
        .container1 img {
            border: 129px solid black;
            border: 122px 122px 122px 122px solid black;
            width: 649px;
            margin-bottom: -9px;
            border-right: 126px solid rgb(150 150 150);
            border-top: 127px solid rgb(150 150 150);
        }

        .container2 {
            display: inline-block;
            border: 5px solid white;
            width: 395px;
            padding: 37px;
            background-color: black;
            /* background-color: white; */
            color: black;
            border-radius: 29px;
            text-align: center;
            padding-top: 10px;
            position: absolute;
            right: 73px;
            top: 164px;
            padding-bottom: 45px;
        }
        
        .form-control {
            width: 340px;
            border: 1px solid white;
            padding: 8px;
            border-radius: 8px;
            margin: 4px;
            line-height: 17px;
            background-color: white;
            font-size:16px;
        }

        ::placeholder{
            
            font-size: 16px;
            justify-content: center;
            color: grey;
            padding:8px 10px 8px 3px;
            font-family: 'Baloo Bhai 2', cursive;
            font-size:17px;
        }

        #upload {
            background-color: #41f31c;
            border: 3px solid #0a0a0a;
            width: 365px;
            height: 38px;
            border-radius: 12px;
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin-top: 30px;
        }

        #upload:hover{
            background-color:#4a148c;
            color:white;
            border:3px solid white;
            font-size:20px;
            font-weight:bold;    
        }

        #myfile{
            /* border: 2px solid red; */
            background-color: white;
            color: gray;
            line-height:10px;
            font-size: 14px;
            margin-top:6px;
            padding: 4px 2px 4px 10px;
        }
        
        #myprice{
            margin-top: -16px;
            margin-bottom: 4px;
        }
        #mydescri{
           
            margin-bottom: -5px;
            margin-top: 4px;
            
        }
        h2{
            font-weight:bolder;
            font-size:37px;
            margin-bottom:10px;
            color: white;

        }
        #myname{
            margin-top:-30px;
        }

</style>
</head>
<body>




    <div class="container1">
        <img src="logo1.gif" alt="">
    </div>

    <div class="container2">
    <h2> ADMIN UPLOAD FORM</h2>

    <form action="upprodtodb.php" method="post"  enctype="multipart/form-data" class="w25">
       
        <input class="form-control" type="text" name="myname" onchange="isEmpty()" autocomplete="off" id="myname" placeholder="Item Name"  >
        
        <input class="form-control" type="text" name="mytype" onchange="isEmpty()" autocomplete="off" id="mytype" placeholder="Item Type"  >
        
        <textarea class="form-control" name='mydescri' id='mydescri' cols="30" rows="2" onchange="isEmpty()"  placeholder="Item Description"></textarea>
       
        <input  type="number" class="form-control" name='myprice' id='myprice' onchange="isEmpty()" placeholder="Item Price">
       
        <input class="form-control" type="file" name="myfile" onchange="isEmpty()" id="myfile" placeholder="Upload the image "> 
       
        <input id="upload"  type='submit' name='submit' value='UPLOAD' disabled>
    
    </form>
    </div>
</body>

<script>
 
    function isEmpty(){
        let name = document.getElementById("myname").value;
        let file = document.getElementById("myfile").value;
        let descri = document.getElementById("mydescri").value;
        let price = document.getElementById("myprice").value;

        // if(name!="" && file!="" && descri!=""){
        //     document.getElementById("upload").removeAttribute("disabled");
        // }

       
        if(name!="" && file!="" && descri!="" && price!=""){
            document.getElementById("upload").removeAttribute("disabled");
        }

    }   


</script>



</html>



