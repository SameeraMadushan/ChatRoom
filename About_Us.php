<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>Chat Room &trade;</title>
<link rel="shortcut icon" href="image.ico" type="image/x-icon" />
<!-------------------------------------------------------------------------------JAVA SCRIPT PART----------------------------------------------> 
<script src="jquery/jquery.js"></script>
<script>
$(document).ready(function() {
    // Hide on start
    $("#info-asha").hide();
    $("#info-asha").animate({"opacity": "0"}, "slow");
    // Handle mouse over for image
    	$("#ashani").hover(function() {
            // This one is when the mouse enters							//need to edit this code with ajax... 
            $("#info-asha").show(); 
    		$("#info-asha").animate({"opacity": "1"}, "slow");
       });
				$("#sameera").hover(function() {
			        // ...and when it hides.
			        $("#info-asha").hide();
					$("#info-asha").animate({"opacity": "0"}, "slow");
					});
				$("#buddini").hover(function() {
			        // ...and when it hides.
			        $("#info-asha").hide();
					$("#info-asha").animate({"opacity": "0"}, "slow");
					});
				$("#sapumal").hover(function() {
			        // ...and when it hides.
			        $("#info-asha").hide();
					$("#info-asha").animate({"opacity": "0"}, "slow");
					});
				$("#kulani").hover(function() {
			        // ...and when it hides.
			        $("#info-asha").hide();
					$("#info-asha").animate({"opacity": "0"}, "slow");
					});
});
$(document).ready(function() {
    // Hide on start
    $("#info-samiya").hide();
    $("#info-samiya").animate({"opacity": "0"}, "slow");
    // Handle mouse over for image
    	$("#sameera").hover(function() {
            // This one is when the mouse enters							//need to edit this code with ajax... 
            $("#info-samiya").show(); 
    		$("#info-samiya").animate({"opacity": "1"}, "slow");
       });
			    	$("#ashani").hover(function() {
				        // ...and when it hides.
				        $("#info-samiya").hide();
						$("#info-samiya").animate({"opacity": "0"}, "slow");
						});
					$("#buddini").hover(function() {
			        // ...and when it hides.
			        $("#info-samiya").hide();
					$("#info-samiya").animate({"opacity": "0"}, "slow");
					});
					$("#sapumal").hover(function() {
				        // ...and when it hides.
				        $("#info-samiya").hide();
						$("#info-samiya").animate({"opacity": "0"}, "slow");
						});
					$("#kulani").hover(function() {
			        // ...and when it hides.
			        $("#info-samiya").hide();
					$("#info-samiya").animate({"opacity": "0"}, "slow");
					});
});
$(document).ready(function() {
    // Hide on start
    $("#info-boo").hide();
    $("#info-boo").animate({"opacity": "0"}, "slow");
    // Handle mouse over for image
    	$("#buddini").hover(function() {
            // This one is when the mouse enters							//need to edit this code with ajax... 
            $("#info-boo").show(); 
    		$("#info-boo").animate({"opacity": "1"}, "slow");
       });
			    	$("#sapumal").hover(function() {
				        // ...and when it hides.
				        $("#info-boo").hide();
						$("#info-boo").animate({"opacity": "0"}, "slow");
						});
					$("#sameera").hover(function() {
			        // ...and when it hides.
			        $("#info-boo").hide();
					$("#info-boo").animate({"opacity": "0"}, "slow");
					});$("#ashani").hover(function() {
				        // ...and when it hides.
				        $("#info-boo").hide();
						$("#info-boo").animate({"opacity": "0"}, "slow");
						});
					$("#kulani").hover(function() {
			        // ...and when it hides.
			        $("#info-boo").hide();
					$("#info-boo").animate({"opacity": "0"}, "slow");
					});
});
$(document).ready(function() {
    // Hide on start
    $("#info-sappa").hide();
    $("#info-sappa").animate({"opacity": "0"}, "slow");
    // Handle mouse over for image
    	$("#sapumal").hover(function() {
            // This one is when the mouse enters							//need to edit this code with ajax... 
            $("#info-sappa").show(); 
    		$("#info-sappa").animate({"opacity": "1"}, "slow");
       });
			    	$("#kulani").hover(function() {
				        // ...and when it hides.
				        $("#info-sappa").hide();
						$("#info-sappa").animate({"opacity": "0"}, "slow");
						});
					$("#buddini").hover(function() {
				        // ...and when it hides.
				        $("#info-sappa").hide();
						$("#info-sappa").animate({"opacity": "0"}, "slow");
						});
					$("#ashani").hover(function() {
				        // ...and when it hides.
				        $("#info-sappa").hide();
						$("#info-sappa").animate({"opacity": "0"}, "slow");
						});
					$("#sameera").hover(function() {
				        // ...and when it hides.
				        $("#info-sappa").hide();
						$("#info-sappa").animate({"opacity": "0"}, "slow");
						});
});
$(document).ready(function() {
    // Hide on start
    $("#info-kulani").hide();
    $("#info-kulani").animate({"opacity": "0"}, "slow");
    // Handle mouse over for image
    	$("#kulani").hover(function() {
            // This one is when the mouse enters							//need to edit this code with ajax... 
            $("#info-kulani").show(); 
    		$("#info-kulani").animate({"opacity": "1"}, "slow");
       });
			    	$("#sapumal").hover(function() {
				        // ...and when it hides.
				        $("#info-kulani").hide();
						$("#info-kulani").animate({"opacity": "0"}, "slow");
						});
					$("#buddini").hover(function() {
				        // ...and when it hides.
				        $("#info-kulani").hide();
						$("#info-kulani").animate({"opacity": "0"}, "slow");
						});
					$("#sameera").hover(function() {
				        // ...and when it hides.
				        $("#info-kulani").hide();
						$("#info-kulani").animate({"opacity": "0"}, "slow");
						});
					$("#ashani").hover(function() {
				        // ...and when it hides.
				        $("#info-kulani").hide();
						$("#info-kulani").animate({"opacity": "0"}, "slow");
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
#Abt-H{
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	font-size: 30px;
	padding-top: 30px;
	padding-bottom:20px;
	text-align:center;
	color: #848484;
	background-color: #EBEBEB;
}
#sameera{
	margin-left: 30px;
	margin-top: 50px;
	width: 125px;
	height: auto;
	text-align:center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	float:left;
	transition: margin-left 1s;
}
#sameera:hover{
	margin-left: 0px;
}
#sapumal{
	margin-left: 30px;
	margin-top: 50px;
	text-align:center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;	
	width: 125px;
	height: auto;
	float:left;
	transition: margin-left 1s;
}
#sapumal:hover{
	margin-left: 0px;
}
#ashani{
	margin-left: 30px;
	margin-top: 50px;
	text-align:center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;
	width: 125px;
	height: auto;
	float:left;
	transition: margin-left 1s;
}
#ashani:hover{
	margin-left: 0px;
}
#buddini{
	margin-left: 30px;
	margin-top: 50px;
	text-align:center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;	
	width: 125px;
	height: auto;
	float:left;
	transition: margin-left 1s;
}
#buddini:hover{
	margin-left: 0px;
}
#kulani{
	margin-left: 30px;
	margin-top: 50px;
	text-align:center;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;	
	width: 125px;
	height: auto;
	float:left;
	transition: margin-left 1s;
}
#kulani:hover{
	margin-left: 0px;
}
#profile{
	width:125px;
	height: 125px;
	transition-duration: 1s;
}
#profile:hover{
	width: 150;
	height:150;
}
#info-asha{
	margin-left: 5%;
	margin-top:200px;
	height:190px;
	width:90%;
	background-color: white;
}
#info-samiya{
	margin-left: 5%;
	margin-top:200px;
	height:190px;
	width:90%;
	background-color: white;
}
#info-boo{
	margin-left: 5%;
	margin-top:200px;
	height:190px;
	width:90%;
	background-color: white;
}
#info-sappa{
	margin-left: 5%;
	margin-top:200px;
	height:190px;
	width:90%;
	background-color: white;
}
#info-kulani{
	margin-left: 5%;
	margin-top:200px;
	height:190px;
	width:90%;
	background-color: white;
}
#details{
	font-family: 'Helvetica Neue',Helvetica,sans-serif;	
	font-size: 20px;
	color: #1474FA;
	padding-left: 20px;
	padding-top: 15px;
}
#description{
	padding-left:50px;
	font-family: 'Helvetica Neue',Helvetica,sans-serif;	
	font-size: 14px;
	color: #848484;
	padding-top: 10px;
	 
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
			<!----<a href="HomePage.php" ><img src="logo.png"  id="logo"/></a>-->
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
		<div id="Abt-H">About Us</div>
		<div id="ashani"><img src="images/profiles/ashani.png" id="profile" /> </div>
		<div id="sameera"><img src="images/profiles/sameera.png" id="profile" /> </div>
		<div id="buddini"><img src="images/profiles/buddini.png" id="profile" /> </div>
		<div id="sapumal"><img src="images/profiles/sapumal.png" id="profile" /> </div>
		<div id="kulani"><img src="images/profiles/kulani.png" id="profile" /> </div>
	<div id="info-asha">
		<p id="details">
			Ashani Dikowita
		</p><p id="description">Student in Sri Lanka Institute of Information Technology.<br>First year student.<br>2015 Batch-02.
			<br /></p>
	</div>
	<div id="info-samiya">
		<p id="details">
			Sameera Madushan
		</p><p id="description">Student in Sri Lanka Institute of Information Technology.<br>First year student.<br>2015 Batch-02.
			<br /></p>
	</div>
	<div id="info-boo">
		<p id="details">
			Buddhini Dias
		</p><p id="description">Student in Sri Lanka Institute of Information Technology.<br>First year student.<br>2015 Batch-02.
			<br /></p>
	</div>
	<div id="info-sappa">
		<p id="details">
			Sapumal Kalutota
		</p><p id="description">Student in Sri Lanka Institute of Information Technology.<br>First year student.<br>2015 Batch-02.
			<br /></p>
	</div>
	<div id="info-kulani">
		<p id="details">
			Kulani Thapoda
		</p><p id="description">Student in Sri Lanka Institute of Information Technology.<br>First year student.<br>2015 Batch-02.
			<br /></p>
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
