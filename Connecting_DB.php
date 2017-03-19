<?php	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'chat_room';
	
	$link = mysqli_connect($host, $user, $pass, $db);
	if (mysqli_connect_errno()){
		die("Connection Error : ". mysqli_connect_error());
	}		
?>