<?php
//
session_start();
include_once("link.php");
echo $_POST["userName"];
$sql = "select * from users where name = '".$_POST["userName"]."'";
echo $sql;
$result = mysqli_query($link, $sql);
if($row = mysqli_fetch_assoc($result)){
    if($_POST["password"]==$row["password"])
$_SESSION["userID"]=$row["userid"];
$_SESSION["userName"]=$row["name"];
$_SESSION["cardnumber"]=$row["cardnumber"];
echo isset($_SESSION['userName']);
    header("Location:index.php");}
else{
    //echo 1;
    //header("Location:index.php");
    echo '<script>alert("注册失败！原因：用户名或密码错误！");history.go(-1);</script>';//11.24早新增加

    //header("Location:index.php");

}

