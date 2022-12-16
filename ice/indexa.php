<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/inxphp.css">
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
               <!-- <a href="#top"><img class="btt" src="img/backtotop.png" alt="back to top float"></a> -->
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
		<main style="background-image: url(img/loginbg1.jpg);width: 800px;border-radius: 10px;">
<style> 

#textboxid
{
    height:200px;
    font-size:14pt;
}
</style>
	<div class="whole" >
		<br><div align="center"><strong class="tittl">Place the Order Here</strong> </div>
		<form action="process.php" method="post"><br><br>
			
<p align="center">
			<label for="firstName">Enter your Name</label>
			<input type="text" name="name" id="firstName"  placeholder="Name" required>
			</p><br><br>

			
<p align="center">
			<label for="lastName">Email</label>
			<input type="email" name="email" id="lastName" placeholder="abc@gmail.com" required>
			</p><br><br>

			
<p align="center">
			PhoneNumber:
			<input type="tel" name="number" id="Gender"  pattern="[0-9]{5}-[0-9]{5}" placeholder="00000-00000" required>
			</p><br><br>

			
<p align="center">
			<label for="Address">Enter Address:</label>
			<textarea name="address" id="Address" placeholder="Address" required height="20px"></textarea>
			</p><br><br>

			
<p align="center">
			<label for="emailAddress">Enter The Order here:</label>
			<input type="text" name="ordt" required>
			</p><br><br>
<p align="center">
			<input type="submit" value="Submit" class="button3"></p>
			<br><br><br><br>
		</form>
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
    <p class="copyright">Copyright © 2022 CRAVINGS </p>
</body>
</html>
