<style type="text/css">
	.myMessage{
		background-color:#1FAFFA;
		background-size:contain;
		padding: 2%;
		margin: 1%;
		height:auto;
		width: 55%;
		text-align: center;
		border-radius: 10px;
		overflow-x: auto;
		float: left;
		display:block;
		color:#F5F6CE;
	}
	
	.otherMessage{
		background-color: #6056F2;
		background-size:contain;
		padding: 2%;
		margin: 1%;
		height:auto;
		width: 55%;
		border-radius: 10px;
		text-align: center;
		overflow-x: auto;
		float: right;
		display:block;
		color:#F5F6CE;
	}
</style>

<?php
	//***Displaying messages***
require('Connecting_DB.php');	
session_start();

$my_username = $_SESSION['my_username'];
$other_username	= $_SESSION['other_username'];

$extract = "SELECT Username1, Username2, Message, Time FROM chat_info WHERE (Username1 = '$my_username' AND Username2 = '$other_username') OR (Username2 = '$my_username' AND Username1 = '$other_username') ";
if(!mysqli_query($link, $extract)){
	die("Failed to extract messages : ".mysqli_error($link));
}
$all = mysqli_query($link, $extract);
while($row = mysqli_fetch_array($all)){
	$user1[] = $row['Username1'];
	$msg[] = $row['Message'];
	$time[] = $row['Time'];
	
	$extract_emoticons = "SELECT * FROM emoticons";
	
	if(!mysqli_query($link, $extract_emoticons)){
		die("Failed to extract emoticons : ".mysqli_error($link));
	}
	
	$emoticons = mysqli_query($link, $extract_emoticons);
	
	while($row = mysqli_fetch_array($emoticons)){
		$chars = $row['chars'];
		$images = "<img src='emoticons/".$row['image']."' width= 30 height= 30 />";
		$msg = str_replace($chars, $images, $msg); 
	}
	
}
$count = mysqli_num_rows($all);

for($i = 0; $i < $count; $i++){
	if($user1[$i] == $my_username){
		echo "<br><span class='myMessage'>".$msg[$i]."<br>"; 
		echo $time[$i]."</span><br><br>";
	}
	elseif($user1[$i] == $other_username){
		echo "<br><span class='otherMessage'>".$msg[$i]."<br>"; 
		echo $time[$i]."</span><br><br>";
	}
}
?>
