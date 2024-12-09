<?php 
include('config/dbconn.php');
session_start();

$id=$_SESSION['id'];  
$username=$_POST['username'];
$password=$_POST['password'];
$sql="UPDATE `user` set `username`='$username',`password`='$password' WHERE `id`='$id'";
$res=$conn->query($sql);
if($res){
    echo "<script> alert('Rows has been updated'); </script>";
    header('location:userlists.php');
}

?>