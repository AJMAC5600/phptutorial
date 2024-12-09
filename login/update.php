<?php 
include('config/dbconn.php');
session_start();
$id=$_POST['id'];

$_SESSION['id']=$id;
$sql="SELECT * FROM `user` WHERE `id`='$id'";
$res1=$conn->query($sql);
$row1=$res1->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update1.php" method='POST'>

        <input type="text" name="username" placeholder="New Username" value="<?php echo $row1['username'];?>" required>
        <input type="text" name="password" placeholder="New Password" value="<?php echo $row1['password'];?>" required>
        <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
        <button type="submit" name="submit">Update</button>

    </form>
</body>

</html>