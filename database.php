<?php 
        if(isset($_POST['submit'])){
            if($_SERVER['REQUEST_METHOD']==='POST'){
                $mydata=Mysqli_connect("localhost","root","","emp");
        if($mydata) echo "Connection is done";
        $stmt=$mydata->prepare("INSERT INTO emp_mang VALUES(?,?,?,?)");
        $stmt->bind_param("issi",$id,$name,$address,$number);
        $id=htmlspecialchars($_POST['id']);
        $name=htmlspecialchars($_POST['name']);
        $address=htmlspecialchars($_POST['address']);
        $number=htmlspecialchars($_POST['number']);
        $stmt->execute();
        echo  $id." ".$name." ".$address." ".$number;
            }
        }
        ?>