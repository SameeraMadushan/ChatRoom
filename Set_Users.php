<?php
require("Connecting_DB.php");
session_start();

$my_username = $_SESSION['my_username'];

$other_username = urldecode($_SERVER['QUERY_STRING']);    //decoding the URL encoded string
$_SESSION['other_username'] = $other_username;            //assigning  username2 to a session variable 

header('location: Chat_Page.php');
?>