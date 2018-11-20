<?php
	session_start();
	include_once("link.php");
	$sql = "INSERT INTO `parking` (`cardnumber`, `postid`) VALUES ('".$_POST["name"]."','".$_POST["cardNumber"]."')";
	mysqli_query($link, $sql);
	header("Location:index.php");
?>