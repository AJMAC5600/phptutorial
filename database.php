<?php 
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="emp";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error) echo "the connection got this error ".$conn->connect_error;
    else echo "Connected successfully";
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD']==='POST'){
           
    $id=htmlspecialchars($_POST['id']);
    $name=htmlspecialchars($_POST['name']);
    $address=htmlspecialchars($_POST['address']);
    $number=htmlspecialchars($_POST['number']);
    $sql="INSERT INTO EMP_TABLE (id,name,address,phone) VALUES(?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("issi",$id,$name,$address,$number);
    // $stmt->execute();
    if($conn->affected_rows>0) echo "<br>the data is entered successfully";
    $sql="select * from emp_table";
    $output=$conn->query($sql);
    echo "<pre>";
    // print_r($output);
    // while($row=$output->fetch_assoc()){
    //     echo "<pre>";
    //     print_r($row);
    // }
    print_r($output->fetch_assoc());
        }}
?>