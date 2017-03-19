<head>
	<title>Chat Room &trade;</title>
	<link rel="shortcut icon" href="image.ico" type="image/x-icon" />
</head>

<?php
require('Connecting_DB.php');
session_start();

$my_username = $_SESSION['my_username'];	//setting my username for later use as Username1
if(empty($my_username)){				
	die("Unauthorized Operation!");			// preventing logging in after logging out
}
				
//***************************************************Sending message********************************************************	

//Selecting User
$Username1 = $my_username;	
$Username2 = $_SESSION['other_username'];   //getting the set value from Set User page.		
	
//Sending Message			
$message = $_POST['message'];
	
//Convert characters to HTML entities to prevent entering invalid format of data.
$Message = htmlentities($message, ENT_QUOTES, "ISO-8859-1");		
echo "<br>";
	
					 //avoding data entry by refreshing the page
if(!empty($message)&&(!header('location: Chat_Page.php'))){
	if((isset($_POST['send'])) && (!empty($Username2))){
			
		$current_time = new DateTime('now', new DateTimeZone('Asia/Colombo')); //getting current time
		$Time = $current_time -> format('g:ia');							   //setting time format
			
		$insert = "INSERT INTO chat_info(Username1, Username2, Message, Time) VALUES('$Username1', '$Username2','$Message', '$Time')";
		if(!mysqli_query($link, $insert)){
			die("Failed to insert message : ".mysqli_error($link));	
		}
	}
}
//echo "<input type='hidden' id='myUsername' value='".$my_username."' />";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Chat_Page_Design.css" />
<style type="text/css">
	.button{
		width:30px;
		height: 30px;
		margin: 2%;
	}
	.button:hover{
		cursor:pointer;
	}
</style>

<script>
	if(document.getElementById('otherUsername').value){
		
	}
</script>


<script src='jquery/jQuery.CDN.js'></script> <!--jQuery Content Delivery Network is Essential to perform below ajax functions-->
<script src="ajax_functions.js"></script> 

</head>

<body class="background" >
		
<div class="wrapper">
	<div class="head_">
		<div class="header">
			<a href="Home_Page.php" ><img src="logo copy.png" class="htext"/></a>
		</div>
	
		<div class="logout"><!--Logging Out-->
			<form id="logout" method="post" action="Log_Out.php"> <!--redirecting to Log Out Page in order to logout the current user-->
				 <div style="float:left;"><?php echo $my_username; ?></div> 
				<input type='submit' name='logout' value='Log Out' class="logoutB" />
			</form>
		</div>
	</div>
</div>	
		
<div class="sidebar-left">
	<div class="online_list">
		<h4 style="color:white; font-size: 18px; font-weight: 200;"> Online Users </h4>	
		<p id="users"><!--users will be checked every 2 seconds and will be recieved to this section--></p>
	</div>			
</div>

	
<div class="main">
	
	<div class="chatlog" >												<!-- main chat log showing area-->
		<div  id="content" style="margin-left: 5%;"><!--Display Messages-->
		 <img style="margin-left: 32%; margin-top: 15%;" width="150px" height="150px" src="loader.gif" />
		</div>													
	</div>
	
	<form id="send_message" method='post' action='Chat_Page.php' onsubmit="notifyMe()" class="typing-area"><!--sending message and button-->
        <br>
        <div class="txt"><!--Currently Sending Message-->
	        <input type="text" name='message' id="messageToBeSent" class="textarea" maxlength = '500' placeholder=" Type here..." />
	        <div class="emoji_button"><img src="Chat Page icons/emoji_button.png" width="45px" height="45px" /></div>
        </div>
        <div class="send-container">
			<br>
			<input type='submit' name='send' value='Send' class="send-button"  />
			<input type="hidden" id="myUsername" value="<?php echo $my_username; ?>" />
			<input type="hidden" id="otherUsername" value="<?php echo $Username2 ?>"/>		
		</div>
		
    </form>
</div>

<div class="sidebar-right">
	<div id="emoticons_tab" class="smiley-container">
    	<img src="emoticons/mad.png" class="button" chars="8-}" />
		<img src="emoticons/shy.png" class="button" chars=":5>"/>
		<img src="emoticons/sad.png" class="button" chars=":("/>
		<img src="emoticons/cry.png" class="button" chars=":1"/>
		<img src="emoticons/happy.png" class="button" chars=":)"/>
		<img src="emoticons/sick.png" class="button" chars=":-&"/>
		<img src="emoticons/wink.png" class="button" chars=":-8"/>
		<img src="emoticons/smiley.png" class="button" chars=":-)"/>
		<img src="emoticons/moa.png" class="button" chars=":-*"/>
		<img src="emoticons/confused.png" class="button" chars=":-?"/>
		<img src="emoticons/not_sure.png" class="button" chars=":-/"/>
		<img src="emoticons/depressed.png" class="button" chars=":-<"/>
		<img src="emoticons/nerd.png" class="button" chars=":-B"/>
		<img src="emoticons/laugh.png" class="button" chars=":-D"/>
		<img src="emoticons/teeth.png" class="button" chars=":-II"/>
		<img src="emoticons/yummi.png" class="button" chars=":-Y"/>
		<img src="emoticons/surprised.png" class="button" chars=":-O_"/>
		<img src="emoticons/scream.png" class="button" chars=":-oo"/>
		<img src="emoticons/tongue.png" class="button" chars=":-P"/>
		<img src="emoticons/crazy.png" class="button" chars=":Z"/>
		<img src="emoticons/flirt.png" class="button" chars=":x"/>
		<img src="emoticons/heart.png" class="button" chars="<3_"/>
		<img src="emoticons/inlove.png" class="button" chars="<3<3"/>
		<img src="emoticons/facepalm.png" class="button" chars="=8"/>
		<img src="emoticons/devil.png" class="button" chars=">:P"/>
		<img src="emoticons/cool.png" class="button" chars="B-)"/>
		<img src="emoticons/sleeping.png" class="button" chars="I-)"/>
		<img src="emoticons/angry.png" class="button" chars="X("/>
		
		 	
    </div>	
</div>

</body>

<footer>
	<hr />
	Copyright &copy; CrazyBunch Developers. All Right Reserved.	
	<nav>
	<a class="links" href="Home_Page.php">Home</a>|
	<a class="links" href="FAQ.php">FAQ</a>|
	<a class="links" href="About_Us.php">About</a>|
	<a class="links" href="Contact_Us.php">Contact</a>
	</nav>	
</footer>

</html>
