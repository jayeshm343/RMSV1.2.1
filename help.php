<html>

<head>

    <title>Puzzles</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        @font-face {
            font-family: font1;
            src: url(KaushanScript-Regular.otf);
        }

        @font-face {
            font-family: font2;
            src: url(fontawesome-webfont.woff);
        }

        @font-face {
            font-family: font3;
            src: url(Montserrat-UltraLight.otf);
        }

        .menu{
            background-color: black;
            overflow: hidden;
            position: fixed;
            top: 0; 
            width: 100%;
            opacity: 0.9;
        }

        .f5{
            background-color: black;
            float: right;
            display:block;
            color: white;
            text-align: center;
            padding: 33px 16px;
            text-decoration: none;
            font-size: 17px;  
            top: 50%;

        }

        .f5:hover{
            color: rgb(251,217,158);
        }

        #current {
            color: rgb(251,217,158);
        }
        
        .container{
            
            
            height: 30%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .caption{
            text-align: center;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: font1;
        }

        .f1{
            display: inline-block;
            padding-top: 25px;
            padding-bottom: 25px;
        }

       input,select{
            border: 1px solid #B38C81;
            border-radius: 3px;
            height:30px;
            width:364px;
            padding-left:23px;
        }

        .resrv{
            background-position: 1.75% 50%;
            background-repeat: no-repeat;
            background-size: 10px;
        }

        .user{ background-image: url(user.png); }
        .email{ background-image: url(email.png); }
        .date{ background-image: url(calendar.png); }
        .time{ background-image: url(time.png); }

        .newsletter{
            background-color:blue; 
            text-align: center;
            padding: 25px 0px 10px 0px;
        }


        .fa{
            padding:8px;
            font-size: 18px;
            width: 18px;
            text-decoration: none;
            border-radius: 50%;
            text-align: center;
            background:rgba(255,255,255,0.15);
            color: white;
        }

        .fa:hover{
            background:rgba(255,255,255,0.25);
            color: rgb(251,217,158);
        }
        
        .chef{
            height: 850px;
            width:250px;
            margin: 0px 20px 40px 20px;
            border-radius: 5px;
        }

        .term{
            text-decoration: none;
            color: white;
        }

   


    </style>
</head>

<body style="background-color:black; margin:0px; color:white; font-family:font3;">
        
        <div class="container">
            <div class="caption">
                <h1>Order Online</h1>
             
            </div>
        </div>
        

        <div class="menu">
            <h1 style="font-family: font1; color: rgb(251,217,158); float:left; padding-left:50px;">PUZZLES</h1>
            <a class="f5"  href="orderonline.html" >ORDER ONLINE</a>
            <a class="f5"  href="Main.html">I'm at the Restaurant</a>
            <a class="f5"  href="menu.html">MENU</a>
            <a class="f5"  href="hello.html">HOME</a>
        </div>

        

        	<?php

			include "connect.php";

			$name = $_POST["name"];
			$mobile = $_POST["number"];
			$address = $_POST["address"];

			$sql = "INSERT INTO customer(name, mobile, address) VALUES ('$name', '$mobile', '$address')";

			mysqli_query($conn, $sql);

			echo "Your order has been placed !";

			?>

			<br><br><br><br><br><br><br><br><br><br><br><br><br>



            <div class="newsletter">

                <form style="border-top: 2px dashed white;
                             border-bottom: 2px dashed white;
                             padding:30px;" method="post" action="hello.html">

                    <label>Subscribe to our newsletter </label><input style="width:300px; padding: 10px; border:none; margin:5px; " type="email" placeholder="Enter your email address" name="email1" required>

                    <input style="width:100px; background-color:green; padding:0px; color:white; border:none;" type="submit">

                </form>

            </div>

            <div><hr><center>
                <a href="apple.html" class="fa fa-facebook"></a>
                <a href="apple.html" class="fa fa-twitter"></a>
                <a href="apple.html" class="fa fa-instagram"></a>
                <a href="apple.html" class="fa fa-linkedin"></a>
            </center><hr>
            </div>


            <footer>
                <div st>
                    <h5 style="float:left; padding-left:10px;">Copyright Puzzles 2017. All rights reserved.</h5>
                    <h5 style="float:right; padding-right:10px;"><a href="hello.html" class="term">Policies</a> | <a href="hello.html" class="term">Disclaimer</a> | <a href="hello.html" class="term">Terms and Conditions</a></h5>
                </div>
            </footer>
    

</body>

</html>


