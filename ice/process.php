<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/process.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/icon">
    <title>CRAVINGS</title>
</head>
<body>
<header>
        <div class="toph"><ul class="tophead">
                <li><img src="img/email.png" alt="Email" width="25px"><a href="mailto:info@cravings.com"> info@cravings.com</a></li>
                <li><img src="img/phone.png" alt="Phone no."  width="25px">+91 8287348758</li>
                <li><img src="img/location.png" alt="Location"  width="25px"><a href=""> Locations</a></li>
            </ul>
        </div>
           <div id="top" class="nav">
               <h1><img class="logo" src="img/logo.png" alt="logo">
               <img class="logo2" src="img/logo2.png" alt="logo"></h1>
               <a href="#top"><img class="btt" src="img/backtotop.png" alt="back to top float"></a>
                   <ul> 
                   <li><a href="index.html">Home</a></li>
                   <li><a href="sundaes.html">Menu</a></li>
                   <li><a href="aboutus.html">About us</a></li>
                   <li><a href="indexa.php">Order Now</a></li>
                   <li><button class="bt1"><i class="fa fa-shopping-cart"></i></button><button class="bt2">0</button><button class="bt3" type="submit" onClick="myFunction()"><i class="fa fa-user-circle"></i></button></li>
                   </ul>
                   <script>
                    function myFunction() {
                      window.location.href="login.html";
                    }
                   </script>
    
           </div>
</header><hr>
	<main style="background-image: url(img/loginbg5.jpg);width: 1260px;border-radius: 10px;">
			<div class="wbox">
				<center><br><div><strong class="tu"> Thank you</strong></div><br><br>
					<strong>Your order has been placed successfully</strong>
					<br><br>
					<strong>Please confirm the order details below</strong></center>

	<center>
		<?php

		$uname = "root";
		$password = "";
		$sname = "localhost";

		$db_name = "icecream";
		$conn = mysqli_connect($sname, $uname, $password, $db_name);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$address = $_REQUEST['address'];
		$ordt = $_REQUEST['ordt'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$name',
			'$email','$number','$address','$ordt')";
		
		if(mysqli_query($conn, $sql)){
			// echo "<h3>Your Order Is placed.Please confirm the Order details</h3>";
		// echo nl2br("\n\nName : \n\nEmail : \n\n "
		// . "Phone No : \n\nAddress : \n\nOrder Details : ");
			echo nl2br("\n\nName : $name\n\nEmail : $email\n\n "
				. "Phone No : $number\n\nAddress : $address\n\nOrder Details : $ordt");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		?>
	</center><br>
	<button class="back1" onclick="gtorderfun()"><i class="fa fa-arrow-left"></i></button>
	<button class="back2" onclick="gtorderfun()">BACK</button>
	<script>
		function gtorderfun()
		{
            window.location.href="indexa.php";
		}
	</script>
	</div>
	</main>
	<footer><br><br>
        <span id="footer"><table align="center">
           <tr > 
               <th class="abs"><strong><a href="aboutus.html">About us</a></strong></th>
               <th class="ru"><strong>Reach us</strong></th>
               <th class="fuo" align="right"><strong>Follow us on</strong></th>
           </tr>
           <tr>
               <td rowspan="3" class="td1"><p>Since 2022, We have been <br>delighting kids and adults of all ages with<br> fantastic irrestible & Mouth watering ice<br> creams,deserts , and a friendly atmosphere that<br> makes everyone feel right at home. <br> We’ve helped countless customers<br>make wonderful memories,<br> and we can’t wait to do <br>the same for you!</p></td>
               <td class="td2"><strong>Address:</strong>More comp.,heera rd.,thane(w)-400606</td>
              <td class="td3"> <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.webp" alt="Facebook" height="50px"></a></td>
           </tr>
           <tr>
            <td class="td4"><strong>Email:</strong>abcd@gmail.com</td>
            <td class="td5"><a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.webp" alt="Instagram" height="50px"></a></td>
           </tr>
           <tr>
            <td class="td6"><strong>Phone no.:</strong>9988179211</td>
            <td class="td7"><a href="https://twitter.com/" target="_blank"><img src="img/twitter.png" alt="twitter" height="30px"></a></td>
           </tr>
        </table>
        </span>
    </footer>
    <p class="copyright"><a href="group.html">Copyright © 2022 CRAVINGS</a></p>
</body>

</html>
