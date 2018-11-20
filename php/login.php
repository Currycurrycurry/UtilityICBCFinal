<?php
session_start();
include_once("link.php");
$sql = "select * from users where name = '".$_POST["userName"]."'";
echo $sql;
$result = mysqli_query($link, $sql);
if($row = mysqli_fetch_assoc($result)){
    if($_POST["password"]==$row["password"])
$_SESSION["userID"]=$row["userid"];
$_SESSION["userName"]=$row["name"];
$_SESSION["cardnumber"]=$row["cardnumber"];
echo isset($_SESSION['userName']);}
//header("Location:index.php");