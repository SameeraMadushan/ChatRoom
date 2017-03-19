<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>

<title>Chat Room &trade;</title>
<link rel="shortcut icon" href="image.ico" type="image/x-icon" />
<!-------------------------------------------------------------------------------JAVA SCRIPT PART----------------------------------------------> 
<script src="jquery/jquery.min.js">
	
</script>
<script type="text/javascript">

	$(document).ready(function() {
		$('#faq').find('dd').hide().end().find('dt').click(function() {
			$(this).next().slideToggle('slow');
		});
	});
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
	width: 180px;
	 
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
	height:auto;
	padding-bottom:220px;
	margin-top: 5px;
	background-image: url('images/backgrounds/otherpages.png');
	
}
#faq-H{
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 30px;
	padding-top: 30px;
	padding-bottom:20px;
	text-align:center;
	color: #848484;
	background-color: #EBEBEB;
}
#faq-body{
	margin-left: 180px;
	margin-top: 40px;
	width: 400px;
}
#faq {
	line-height: 25px;
}

#faq dt {
	color: #2763A5;
	cursor: pointer;
	margin: 8px 0;
	padding: 0;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
}
#faq dd {
	background-color: #F0F0F0;
	color: #848484;
	
}
#faq dd p {
	padding: 10px;
	margin: 0px;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
}
#drop{
	width: 17px;
	height: 17px;
	opacity: 0.5;
}
#drop:hover{
 	content: url('minus.png');
	width: 17px;
	height: 17px;
	
	
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
		<div id="faq-H">Frequently Asked Questions</div>
		<div id="faq-body">
			<div id="faq">
					<dt><img src="plus.png" id="drop" /> What is Chat Room?</dt>
					<dd><p>Chatroom is a place where you can communicate
						with your friends,and discuss whatever you need to.<br> 
						 
					</p></dd>
					<dt><img src="plus.png" id="drop" /> Why did we develop this chat room?</dt>
					<dd><p> This chat room is created to make communication easier. <br>
						
					</p></dd>
					<dt><img src="plus.png" id="drop" /> How to create an account?</dt>
					<dd><p> Go to the Home Page and fill all the details required in <br>
						 	the Sign Up form.<br>
						
					</p></dd>
					<dt><img src="plus.png" id="drop" /> Are there any age requirements?</dt>
					<dd><p> There are no age requirements. <br>
					</p></dd>
					
					<dt><img src="plus.png" id="drop" /> Can I use my mobile or tablet device to chat?</dt>
					<dd><p> We are planning to develop it soon! <br>
					</p></dd>
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
