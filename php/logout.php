<?php

session_start();
//echo '';
$_SESSION = array();
unset($_SESSION['userName']);
echo $_SESSION['userName'];
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
header("Location:index.php");
?>