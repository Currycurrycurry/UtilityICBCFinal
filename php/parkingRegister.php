<?php
	session_start();
	include_once("link.php");
	$sql = "INSERT INTO `parking` (`cardnumber`,`carLicense`) VALUES ('".$_POST["cardNumber"]."','".$_POST["carLicense"]."')";
	//echo $sql;
    $result = mysqli_query($link, $sql);

    //echo "error:".$result;

	if($result){
	    $_SESSION["carLicnese"] = $_POST["carLicense"];
        header("Location:parkChoosing.php");
    }else{
        echo "<script>alert('注册失败！'); history.go(-1);</script>";
    }


?>