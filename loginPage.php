
<?php

$connect=mysqli_connect("localhost","root","",'assignmentUpload') or die("connection failed ");
if(!empty($_POST['save'])){
	$systemid= $_POST['systemid'];
	$password= $_POST['password'];
	$query="select * from studentRecord where systemid='$systemid' and password='$password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0){
		echo "Already registered";
	}
	else{
		echo "Not registered yet";
	}
}
// $systemid= $_POST['systemid'];
// $password= $_POST['password'];

//Database connection
//Registering the user first time
// $conn =new mysqli('localhost','root','','test');
// if($conn->connect_error){
// 	die('connection failed : '.$conn->connect_error);
// }else{
// $stmt=$conn->prepare("insert into studentRecord( systemid,password)
// 	values(?,?)");
// $stmt->bind_param("is",$systemid, $password);
// $stmt->execute();
// echo "registration successfully....";
// $stmt->close();
// $conn->close();
// }
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		long in
	</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div id="logo">
		<img src="/Users/muhammad/Desktop/final year project/icons/logo1.png">
	</div><br>
	<div id="profileicon">
		<img id="profile" src="/Users/muhammad/Desktop/final year project/icons/profileicon.png">
	</div>
	<form id="loginform" method="Post">

		<div class="systemid">

			<input id="systemid" type="text" name="systemid" placeholder="Enter System ID" required>
		</div>
		<div class="password">

			<input id="password" type="password" name="password" placeholder="Enter Password" required>
		</div><br>
		
			<button id="login" name="loginbtn">Login</button>
		<input type="submit"name="loginbtn"value="login"/>




	</form>




	<div class="rememberme">
		<input type="checkbox" name="rememberme"><label id="rememberme">Remember me</label>
	</div>

	<br><br><br><br><br><br><br><br><br><br>

		<a href="interface.html" id="cancellogin"><button id="cancellogin" onclick="busines.html" id="canel">Back</button></a>

	<div class="forgot">
		<label id="forgot">Forgot </label> <a href="forgotpass.html">password</a>
	</div>

</body>
</html>