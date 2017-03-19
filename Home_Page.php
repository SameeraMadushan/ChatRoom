<?php
require("Connecting_DB.php");
session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>Chat Room &trade;</title>
<link rel="shortcut icon" href="image.ico" type="image/x-icon" />
<!-------------------------------------------------------------------------------JAVA SCRIPT PART----------------------------------------------> 
<script type="text/javascript">
			function sign_up(){
				window.location = "Sign_Up.php";
			}
</script>
<script src="jquery/jquery.min.js"></script>
	<script>
		$(function() {

			$("#slideshow > div:gt(0)").hide();

			setInterval(function() {
			  $('#slideshow > div:first')
			    .fadeOut(000)
			    .next()
			    .fadeIn(3000)
			    .end()
			    .appendTo('#slideshow');
			},  5000);
		});
	</script>
<!-------------------------------------------------------------------------------CSS PART----------------------------------------------> 
<style type="text/css">
#background{
background-image: url('images/backgrounds/Blurback.JPG');
background-repeat: no-repeat;
background-position: center;
background-size:cover;
background-attachment: fixed;
}
#wrapper{
	margin-left:auto;
    margin-right:auto;
    width:1000px;
    height:auto;
}
#head {
	box-shadow: 0px 5px 20px #AFB0C1; 
	width:1000px;
	height:100px;
	background-color: #1474FA;
}
#header{
	height:100px;
	width:700px;
	float:left;
}
#htext{							/*header text style*/
	color: white;
	padding-top:20px;
	float:left;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	padding-left: 10px;
}
#profile{
	margin-right: 2%;
	margin-top:3%;
	float: right;
	width: 20%;
	color: #ffffff;
	font-family: helvetica, serif;
	float: right;
}
.logoutB{
	border: 0px solid #ffffff;
   background: #ffffff;
   color: #788dfa;
   font-family: helvetica, serif;
   padding: 2% 3%;
   float: right;
   font-size: 13px;
   vertical-align: middle;
}
.logoutB:hover {
   border: 0px solid #6046f2;
   background: #adb8fa;
   color: #fff;
}
#a{
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 16px;
	text-decoration: none;
	vertical-align: middle;
	transition: font-size 1s;
}
#a:hover{
	font-size: 18px;
}
#nav{
	float: left;
	width: 100px;
	padding: 5px;
	padding-left:15px;
	background-color: #E0EBEE;
	height: 30px;
	text-align: left;
	vertical-align: middle;
	margin-top: 5px;
	margin-bottom:5px;
	margin-left:0px;
	transition: width 1s;
}
#nav:hover{
	width: 180;
}
#icon{
	vertical-align: middle;
	width:25px;
	height: 25px;
	padding:2px;
}
#sidebar-left {
	width:200px;
	height:490px;
	float:left;
	padding-right:5px;
	padding-left:0px;
	line-height:30px;					/*height of the line(line spacing)*/
	font-size: 16px;
}
#main {
	width:580px;
	margin:5px;
	float:left;
	height:500px;
	background-image: url('images/backgrounds/chatmain.png');
}
#slideshow{
	width: 560px;
	margin:10px;
	float: left;
	height: 200px;
	background-color: #E6E6E6;
}
#slide-img{
	height: 200px;
	width:560px;
	margin:0px;
	float:left;
}
#size{
	width: 90px;
	height:90px;
}
#image1{
	margin-left:45px;
	margin-top:0px;
	float:left;
	text-align: center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	color: #6E6E6E;
}
#image2{
	margin-left:100px;
	margin-top:0px;
	float:left;
	text-align: center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	color: #6E6E6E;
}
#image3{
	margin-right:50px;
	margin-top:0px;
	float:right;
	text-align: center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	color: #6E6E6E;
}
#image4{
	margin-left:43px;
	margin-top:20px;
	float:left;
	text-align: center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	color: #6E6E6E;
}
#image5{
	margin-left:85px;
	margin-top:20px;
	float:left;
	text-align: center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	color: #6E6E6E;
}
#image6{
	margin-right:50px;
	margin-top:20px;
	float:right;
	text-align: center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	color: #6E6E6E;
}
#sidebar-right {
	margin-top:5px;
	width:200px;
	height:500px;
	float:right;
}
.invalid
{
	display : none;
	float: right;
	text-align: right;
}
.form-container {
   background: #E0EBEE;
   font-family: 'Helvetica Neue',Helvetica,sans-serif;
   text-decoration: none;
   vertical-align: middle;
   padding:8.5%;
   width:83%;
   height: 37%;
   transition: height 2s;	 
}
.form-container:hover {
	height: 93%;
}
.form-field {
   border: 1px solid #9c9996;
   background: #ffffff;
   color: #050505;
   padding:5%;
   margin-bottom:7%;
   width:100%;
   }
.form-field:focus {
   background: #fff;
   color: #050505;
   }
.form-container h2 {
   text-shadow: #fdf2e4 0 1px 0;
   font-size:18px;
   margin: 0 0 2px 0;
   font-weight:bold;
   text-align:center;
    }
.form-title {
   margin-bottom:5px;
   color: #322b9e;
   text-shadow: #fdf2e4 0 1px 0;
   }
.submit-container {
   margin:8px 0;
   text-align:right;
 }
.submit-button {
   border: 0px solid #ffffff;
   background: #788dfa;
   color: #ffffff;
   font-family: helvetica, serif;
   padding: 5% 10%;
   font-size: 14px;
   vertical-align: middle;
   }
.submit-button:hover {
   border: 0px solid #6046f2;
   background: #adb8fa;
   color: #fff;
   }

#abc{
	opacity: 0;
	transition: opacity 1s;
}
#abc:hover{
	opacity:1;
}

#him:hover #abc{
	opacity:1;
}

#footer {
	width:100%;
	height:auto;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 12px;
	float:left;
}

</style>
</head>
<!-------------------------------------------------------------------------------BODY----------------------------------------------> 
<body id="background">
<!-------------------------------------------------------------------------------HEADER----------------------------------------------> 
<div id="wrapper">
	<div id="head">
		<div id="header">
			<a href="Home_Page.php" ><img src="logo copy.png" id="htext"/></a>
		</div>
		<div id="profile">
			<form method="post" action="Log_Out.php">
			<a href="Chat_Page.php" style="text-decoration: none; color: #FFFFFF; float: right;"><?php echo $_SESSION['my_username']; ?></a>
			</form>
		</div>
	</div>
<!-------------------------------------------------------------------------------LEFT SIDE BAR----------------------------------------------> 
<div id="sidebar-left">
		<a  id="a" href="Home_Page.php">
		<div id="nav">
		<img src="images/navigation/Home.png" id="icon" />  Home
		</div></a>
		<a  id="a" href="FAQ.php">
		<div id="nav">
		<img src="images/navigation/faq.png" id="icon"/>  FAQ
		</div></a>
		<a  id="a" href="About_Us.php">
		<div id="nav">
		<img src="images/navigation/about.png" id="icon"/>  About
		</div></a>
		<a  id="a" href="Contact_Us.php">
		<div id="nav">
		<img src="images/navigation/contact.png" id="icon"/>  Contact
		</div></a>
</div>
<!-------------------------------------------------------------------------------MAIN AREA----------------------------------------------> 
<div id="main">
	<div id="slideshow">
		 <div>
	     <a href="Sign_Up.php"><img id="slide-img" src="images/slideshow/latest-tech.png"></a> 
	   </div>
	   <div>
	     <a href="Sign_Up.php"><img id="slide-img" src="images/slideshow/sign up today.png"></a> 
	   </div>
	    <div>
	     <a href="Sign_Up.php"><img id="slide-img" src="images/slideshow/100-secured.png"></a> 
	   </div>
	   <div>
	     <a href="Sign_Up.php"><img id="slide-img" src="images/slideshow/user firendly.png"></a> 
	   </div>
	    <div>
	     <a href="Sign_Up.php"><img id="slide-img" src="images/slideshow/stay-connected.png"></a> 
	   </div>
	   
	</div>
	<div id="features">
		<div id="image1"><img id="size" src="images/home-icons/friend.png" /><br>Stay Connected</div>
		<div id="image2"><img id="size" src="images/home-icons/secured.png" /><br>Secured Place</div>
		<div id="image3"><img id="size" src="images/home-icons/Freee.png" /><br>Cost Free</div>
		<div id="image4"><img id="size" src="images/home-icons/technology.png" /><br>Latest Technology</div>
		<div id="image5"><img id="size" src="images/home-icons/hangout.png" /><br>Unlimited Chats</div>
		<div id="image6"><img id="size" src="images/home-icons/friendly.png" /><br>User Friendly</div>
	</div>
</div>
<!-------------------------------------------------------------------------------RIGHT SIDE BAR----------------------------------------------> 
<div id="sidebar-right">
<!-------------------------------------------------------------------------------LOGIN/SIGN UP FORM----------------------------------------------> 
<div id="him">
			<form class="form-container" method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
			<div class="form-title"><h2 id="h2">Log In</h2></div>
			<div class="form-title">Email<span id="star1" style="color: red;" class="invalid"> * </span></div>
			<input class="form-field" type="email" name="log_eml" id="log_eml" placeholder=" Enter E-mail"/><br /><br />
			<div class="form-title">Password<span id="star2" style="color: red;" class="invalid"> * </span></div>
			<input class="form-field" type="password" name="log_pw" id="log_pw" placeholder=" Enter Password"/><br />
			<span id="incomplete_form" style="color: red; font-weight: bold; font-size: 12px" class="invalid">Invalid E-mail or Password! </span>
			<div id="abc">
			<div class="submit-container">
			<br>
			<input class="submit-button" type="submit" value=" Login  " name="login" />
			</div>
			<div class="form-title"><br><br>Need a new account?</div>
			<div class="submit-container">
			<input class="submit-button" type="button" name="signup"  value="Sign Up" onclick="sign_up()" />
			</div>
			</div>
			</form>
	</div>
</div>
</body>
<!-------------------------------------------------------------------------------FOOTER----------------------------------------------> 
<footer>
	<div id="footer">
		<hr />
		Copyright &copy; CrazyBunch Developers. All Right Reserved.
	</div>
</footer>
</div>
</html>
<!-------------------------------------------------------------------------------PHP PART WITH DATABASE----------------------------------------------> 
<?php
if ((isset($_POST['signup'])) && (!header('Location: Home_Page.php'))){
	header('Location: Sign_Up.php');
}    

$log_eml = $_POST['log_eml'];
$log_pw = $_POST['log_pw'];
$check = "SELECT Email, Password, Username1, Status
		  FROM chat_info
		  WHERE Email = '$log_eml' and Password = '$log_pw'";

	if (!mysqli_query($link, $check))
	{
		die ("Failed to execute query : ". mysqli_error($link));
	}						
   	$result = mysqli_query($link, $check);
	$log_in = mysqli_fetch_array($result);
	
if(($log_in['Email']===$log_eml)&&($log_in['Password']===$log_pw)){
	if(!empty($log_eml)||(!empty($log_pw))){
		
		if(isset($_POST['login'])){
				
			$setOnline = "UPDATE chat_info SET Status = 1 WHERE Email = '$log_eml' AND Password = '$log_pw'";
				
				if(!mysqli_query($link, $setOnline)){
					die("Failed to change status to online : ".mysqli_error($link));
				}
			$_SESSION['my_username']=$log_in['Username1'];
			//header('location: Chat_Page.php');
			echo "<script>
					window.location = 'Chat_Page.php';
					</script>";
		}
	}
}
else{
	if(isset($_POST['login'])){
		echo "<script type='text/javascript'>
				function login()
				{
					document.getElementById('star1').classList.remove('invalid');
					document.getElementById('star2').classList.remove('invalid');
					document.getElementById('incomplete_form').classList.remove('invalid');
				}
				login();
				</script>";
	}
}
?>