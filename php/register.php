<?php
	session_start();
	include_once("link.php");

	$sql = "INSERT INTO users (name,cardnumber,password) VALUES ('".$_POST["name"]."','".$_POST["cardNumber"]."',
	'".$_POST["password"]."')";
	//echo $sql;
	$result = mysqli_query($link, $sql);
	//echo "error:".$result;
	if($result) {
//        $_SESSION["userID"] = $_POST["userID"];
        $_SESSION["userName"] = $_POST["name"];
        $_SESSION["cardnumber"] = $_POST["cardNumber"];
        include_once ('OpenAcount.php');
        header("Location:index.php");
    }else{
        echo "<script>alert('注册失败！'); history.go(-1);</script>";
    }


?>