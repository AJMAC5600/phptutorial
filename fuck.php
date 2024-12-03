<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<?php 
$user=$_COOKIE['username'];
$pass=$_COOKIE['password'];
?>

<body>

    <center>
        <figure>
            <img src="./download.jpg" alt="" />
            <h1>
                <?php echo $user." is for u"; ?>
            </h1>
        </figure>
    </center>
</body>

</html>