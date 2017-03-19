<?php
require("Connecting_DB.php");
session_start();

$my_username = $_SESSION['my_username'];

$offline = "UPDATE chat_info SET Status = 0 WHERE Username1 = '$my_username'";
if(!mysqli_query($link, $offline)){
	die("Failed to set offline : ".mysqli_error());
}
session_unset();
session_destroy();

header("location: Home_Page.php");
mysqli_close($link);
?>