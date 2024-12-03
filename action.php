<?php 
$username=htmlspecialchars($_POST['username']);
$pass=htmlspecialchars($_POST['password']);
if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(strcmp($username,"Aadarsh")===0 && strcasecmp($pass,"Aadarsh")===0){
            header("location:fuck.php");;
            setcookie("username",$username);
            setcookie("password",$pass);
        }
        elseif(strcmp($username,"Omkar")===0 && strcasecmp($pass,"Omkar")===0){
            header("location:fuck.php");;
            setcookie("username",$username);
            setcookie("password",$pass);
        }
        
        else{
            echo "<h1>Enter the correct password</h1>";
        }
    }
}
?>