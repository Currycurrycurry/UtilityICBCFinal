<?php
	session_start();
	include_once("link.php");

	$sql = "INSERT INTO users (name,cardnumber,password) VALUES ('".$_POST["name"]."','".$_POST["cardNumber"]."',
	'".$_POST["password"]."')";

	$result = mysqli_query($link, $sql);
	if($result) {
        $_SESSION["userName"] = $_POST["name"];
        $_SESSION["cardnumber"] = $_POST["cardNumber"];
        include_once ('OpenAcount.php');
        header("Location:index.php");
    }else{
        echo "<script>alert('注册失败！原因：用户名已存在'); history.go(-1);</script>";
    }

?>