<?php
include('config/dbconn.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT `username`,`password` FROM `USER` WHERE `username`='$username'";
$res=$conn->query($sql);
$row=$res->fetch_assoc();


?>