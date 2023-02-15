<?php


$systemid= $_POST['systemid'];
$password= $_POST['password'];
//Database connection
$conn =new mysqli('localhost','root','','assignmentUpload');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}else{
$stmt=$conn->prepare("insert into studentRecord( systemid,password)
	values(?,?)");
$stmt->bind_param("is",$systemid, $password);
$stmt->execute();
echo "registration successfully...";
$stmt->close();
$conn->close();
}


?>