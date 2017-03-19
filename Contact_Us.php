<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>

<title>Chat Room &trade;</title>
<link rel="shortcut icon" href="image.ico" type="image/x-icon" />
<!-------------------------------------------------------------------------------JAVA SCRIPT PART----------------------------------------------> 

<script type="text/javascript">
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
/*#logo{
	width:108px; 
	height:43px;
	padding: 10px;
	margin-top:30px;
	float: left;
	 
}*/
#htext{							/*header text style*/
	color: white;
	padding-top:20px;
	float:left;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	padding-left: 10px;
	
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
	/*background-color: #FFFFFF;*/
	padding-right:5px;
	padding-left:0px;
	line-height:30px;					/*height of the line(line spacing)*/
	font-size: 16px;
	
}


#main {

	width:795px;
	float:left;
	height:500px;
	margin-top: 5px;
	background-image: url('images/backgrounds/otherpages.png');
	
}
#cnt-H{
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 30px;
	padding-top: 30px;
	padding-bottom:20px;
	text-align:center;
	color: #848484;
	background-color: #EBEBEB;
}


#footer {
	width:100%;
	height:auto;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 12px;
	float:left;
	
}

#cnt-body{
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 15px;
	width:300px;
	margin-left:70px;
	padding-top: 30px;
	padding-bottom:20px;
	float: left;
}
#links{
	margin-left: 70px;
	margin-top:20px;
	color:#848484;
	text-decoration:none;
	float: left;
}
#qrcode{
	float: left;
	width: 100px;
	height: 100px;
	margin-left: 70px;
	margin-top: 20px;
}
#map{
	float:left;
	margin-top:80px;
	margin-left: 50px;
}
</style>
</head>
<!-------------------------------------------------------------------------------BODY----------------------------------------------> 

<body id="background">
<!-------------------------------------------------------------------------------HEADER----------------------------------------------> 
<div id="wrapper">
	<div id="head">
		<div id="header">
	<!----		<a href="HomePage.php" ><img src="logo.png"  id="logo"/></a>--->
				
			<a href="Home_Page.php" ><img src="logo copy.png" id="htext"/></a>
			
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
		<div id="cnt-H">Contact Us</div>
		<div>
		<div id="cnt-body">
			<br>
			<p style="color:#1474FA; font-size: 15px; "> You can report your questions to,</p>
				<div >
				<br> <a id="links" href="http://www.google.com"><img src="images/contact/email.png" id="icon"/> chatroom@info.com</a><br>
				<br> <a id="links" href="http://www.facebook.com"><img src="images/contact/facebook.png" id="icon"/> chatroom/facebook.com</a><br>
				<br> <a id="links" href="http://www.twitter.com"><img src="images/contact/twitter.png" id="icon"/> chatroom/twitter.com</a><br>
				<img src="images/contact/qrcode.png" id="qrcode">
				</div>
		</div>	
		<div id="map">
			<script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=6.915912&long=79.972939&zoom=15&width=300&height=250&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle=">
				
			</script>
		</div>
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
