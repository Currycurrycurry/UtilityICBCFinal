<?php
	session_start();
	include_once("link.php");
	$sql = "INSERT INTO `users` ( `name`, `cardnumber`, `postid`, `address`, `phone`, `isuser`,`password`) VALUES ('".$_POST["name"]."','".$_POST["cardNumber"]."',
	'".$_POST["userID"]."',
	'".$_POST["address"]."',
	'".$_POST["phone"]."',
	'".$_POST["demo-priority"]."','".$_POST["password"]."')";
	$result = mysqli_query($link, $sql);
	$_SESSION["userID"]=$_POST["userID"];
	$_SESSION["userName"]=$_POST["name"];
	$_SESSION["cardnumber"]=$_POST["cardNumber"];
    include_once ('OpenAcount.php');
	header("Location:index.php");

?>