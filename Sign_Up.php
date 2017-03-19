<!-------------------------------------------------------------------------------STARTING HTML PART----------------------------------------------> 
<!DOCTYPE>
<html>
<head>
<title>chat room</title>
<link rel="shortcut icon" href="image.ico" type="image/x-icon" />
<!-------------------------------------------------------------------------------JAVA SCRIPT PART----------------------------------------------> 
<script type="text/javascript">
			function sign_up_valid()
			{
				var usn = document.getElementById("usn").value;
				var pw = document.getElementById("pw").value;
				var cpw = document.getElementById("cpw").value;
				var eml = document.getElementById("eml").value;
				
				if ((usn && pw && cpw && eml) == "" || (pw == cpw))
				{
					if (usn == "")
						document.getElementById("star1").classList.remove("invalid");
					else
						document.getElementById("star1").classList.add("invalid");
					if (pw == "")
						document.getElementById("star2").classList.remove("invalid");
					else
						document.getElementById("star2").classList.add("invalid");	
					if (cpw == "")
						document.getElementById("star3").classList.remove("invalid");
					else
						document.getElementById("star3").classList.add("invalid");	
					if (eml == "")
						document.getElementById("star4").classList.remove("invalid");
					else
						document.getElementById("star4").classList.add("invalid");			
					if ((usn && pw && cpw && eml) == "")
					{
						document.getElementById("incomplete_form").classList.remove("invalid");
						return false;
					}
				}
				if (((pw && cpw) != "") && (pw != cpw))
				{
					alert("Oops! Password and Confirm Password Do Not Match. Please Try Again!");
					return false;
				}
				else
					return true;
			}
</script>
<!-------------------------------------------------------------------------------CSS PART----------------------------------------------> 
<style type="text/css">
#background{
background-image: url('images/backgrounds/Blurback.JPG');
background-repeat: no-repeat;
background-size:cover;
background-position: center;
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
	padding-left:10px;
}
#main {
	width:1000px;
	float:left;
	height:500px;
	margin-top: 5px;
	background-image: url('images/backgrounds/otherpages.png');
}
.form-container {
   font-family: 'Helvetica Neue',Helvetica,sans-serif;
   text-decoration: none;
   vertical-align: middle;
   margin-left:24%;
   margin-right:24%;
   margin-top:0.5%;
   padding:2%;	
   width:50%;
   height: 88%;
}
.form-field {
   border: 1px solid #9c9996;
   background: #ffffff;
   color: #050505;
   padding:2%;
   margin-bottom:4%;
   width:95%;
   font-size: 16px;
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
   font-size: 18px;
}
.submit-container {
   text-align: right;
   margin-right: 5%;
}
.submit-button {
   border: 0px solid #ffffff;
   background: #788dfa;
   color: #ffffff;
   font-family: helvetica, serif;
   padding: 3% 8%;
   font-size: 18px;
   vertical-align: middle;
}
.submit-button:hover {
   border: 0px solid #6046f2;
   background: #adb8fa;
   color: #fff;
}
.invalid
{
	display : none;
}	
#a{								/*navigation text styles*/
	color:black;
	padding-right:10px;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	text-decoration: none;
}
#nav{
	margin-left:81%;
	margin-top: -1.2%;
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
	</div>
<!-------------------------------------------------------------------------------MAIN AREA----------------------------------------------> 
<div id="main">
		<div >
			<form class="form-container" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return sign_up_valid()" >
			<div class="form-title"><h2 id="h2">Register Now</h2></div>
			<div class="form-title">User Name</div>
			<input class="form-field" type="text" name="sign_un" id="usn" size="40" placeholder="Enter your name" /> <span id="star1" style="color: red;" class="invalid"> * </span><br />
			<div class="form-title">Password</div>
			<input class="form-field" type="password" name="sign_pw" id="pw" size="40" placeholder="Password" /> <span id="star2" style="color: red;" class="invalid"> * </span><br />
			<div class="form-title"> Confirm Password</div>
			<input class="form-field" type="password" name="sign_cpw" id="cpw" size="40" placeholder="Confirm Password"/> <span id="star3" style="color: red;" class="invalid"> * </span> <br />			
			<div class="form-title">Email</div>
			<input class="form-field" type="email" name="sign_eml" id="eml" size="40" placeholder="Enter your E-mail" /> <span id="star4" style="color: red;" class="invalid"> * </span><br />
			<div><span id="incomplete_form" style="color: red; font-weight: bold; font-size: 12px" class="invalid"> Form is Incomplete! Please Complete the form and Try again. </span></div>
			<div class="submit-container">
			<br>
			<input class="submit-button" type="submit" value="Sign Up" name="signup" />
			</div>
			<div><br><br><span id="incomplete_form" style="color: red; font-weight: bold; font-size: 12px" class="invalid"> Form is Incomplete! Please Complete the form and Try again. </span></div>
			</form>
		</div>	
</div>
</body>
<!-------------------------------------------------------------------------------FOOTER----------------------------------------------> 
<footer>
	<div id="footer">
		<hr />
		Copyright &copy; CrazyBunch Developers. All Right Reserved.	
		<nav id="nav">
		<a id="a" href="Home_Page.php">Home</a>
		<a id="a" href="FAQ.php">FAQ</a>
		<a id="a" href="About_Us.php">About</a>
		<a id="a" href="Contact_Us.php">Contact</a>
	</nav>
	</div>
</footer>
</div>
</html>
<!-------------------------------------------------------------------------------PHP PART WITH DATABASE----------------------------------------------> 

<?php
	
	require "Connecting_DB.php";
	session_start();
	
	$sign_eml = $_POST['sign_eml'];
	$sign_pw = $_POST['sign_pw'];
	$sign_un = $_POST['sign_un'];
	
	$check_eml = "SELECT email FROM chat_info WHERE email='$sign_eml'";
	
	if (!mysqli_query($link, $check_eml)){
		die ("Failed to check for valid email : ". mysqli_error($link));
	}
	
	$res_eml = mysqli_query($link, $check_eml);
	$valid_eml = mysqli_fetch_array($res);
	
	if(empty($valid_eml['Email'])){
		if(isset($_POST['signup'])){
			$check_un = "SELECT Username1 FROM chat_info WHERE Username1 = '$sign_un'";
			
			if(!mysqli_query($link, $check_un)){
				die("Failed to check for a valid username : ".mysqli_error($link));
			}
			$res_un = mysqli_fetch_array($link, $check_un);
			$valid_un = mysqli_fetch_array($res_un);
			
			if((empty($valid_un['Username1']))&&(!header('location: SignUp.php'))){
				$query = "INSERT INTO chat_info(Email, Password, Username1, Status) VALUES('$sign_eml', '$sign_pw', '$sign_un', 1)";
				
				if(!mysqli_query($link, $query)){
					die("Failed to  insert sign-up data! : ".mysqli_error($link));
				}
				
				$_SESSION['my_username'] = $sign_un;
				echo "<script>
					window.location = 'Chat_Page.php';
					</script>";
			}
			else{
				echo "<script> alert('Sorry! Username you entered is already taken. Please try another one!'); </script>";	
			}
		}
	}
	else{
		echo"<script>alert('Sorry! Email you entered is already taken. Please try again');</script>";
	}
	
mysqli_close($link);	

?>
