<?php
include_once("PostSender.php");
session_start();
$post_data = array(

  '$class'=> "org.example.mynetwork.Trader",
  "tradeId"=> $_SESSION["cardnumber"],
  "firstName"=> "n",
  "lastName"=> "n"
);


echo send_post('http://192.168.88.131:3000/api/Trader', $post_data);