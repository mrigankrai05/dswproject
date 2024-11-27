<?php
$servername="localhost";
$username="root";
$password="";
$db_name="trainbooking";
$conn= new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="CREATE TABLE userdata(id int primary key AUTO_INCREMENT, name varchar(30),age int,departure_date date,departure varchar(30),arrival varchar(30))";
if($conn->query($sql)===true){
    echo "table created successfully";
}
else{
    echo "error creating table:".$conn->error;
}
$conn->close();
?>