

<style type="text/css">
#logo{
	text-align: center;
	width: 100%;
}

#profile{
	width: 100px;
}

#profileicon{
	text-align: center;

}

.systemid{
	text-align: center;
	
}
.password{
	text-align: center;
}
.loginbtn{
	text-align: center;
}
#systemid{
	width: 500px;
	height: 50px;
	border-radius: 10px;
	/*border: 10px solid black;*/
	background: lightgray;
	color: black;
	padding: 10px;
	padding-left: 10px;
	/*border: 3px solid #4b5052;
	box-shadow: 3px 3px 8px 0 #000;*/

}

#password{
	width:500px;
	height: 50px;
	border-radius: 10px;
	background: lightgray;
	color: black;
	padding: 10px;
	padding-right: 10px;

}

#login{
	width: 525px;
	height: 70px;
	border-radius: 10px;
	background: darkgreen;
	color: black;
	padding: 10px;
	padding-right: 10px;
	font-size: 20px;
	font-weight: bold;
	/*border: 3px solid #4b5052;*/
	/*box-shadow: 3px 3px 8px 0 #000;*/
}

#cancellogin{
	width: 200px;
	height: 50px;
	background: darkgreen;
	border-radius: 7px;
	font-size: 20px;
}

.forgot{
	text-align: right;
}
input::placeholder {
	color: black;
	font-family: sans-serif;
	font-weight: bold;
	
}
input:hover{
	background-color: yellow;
	border: 1px solid #999;
    border-radius: 5px;
    background: yellow;
}

#rememberme{
	size: 50;
}
</style>
<img src="/Applications/XAMPP/xamppfiles/htdocs/icons/logo1.png"><br>
<img src="//Users/muhammad/Desktop/final year project/icons/profileicon.png">
<form  method="post">

	<div class="systemid">

		<input id="systemid" type="text" name="systemid" placeholder="Enter System ID" required>
	</div>
	<div class="password">

		<input id="password" type="password" name="password" placeholder="Enter Password" required>
	</div><br>
	<div class="loginbtn">
		<input type="submit" id="login" name="save"value="Login"/>
	</div>

</form>
<?php

$connect=mysqli_connect("localhost","root","",'assignmentUpload') or die("connection failed ");
if(!empty($_POST['save'])){
	$systemid= $_POST['systemid'];
	$password= $_POST['password'];
	$query="select * from studentRecord where systemid='$systemid' and password='$password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0){
		header("Location: mAin.php");
		exit;

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

	<div class="rememberme">
		<input type="checkbox" name="rememberme"><label id="rememberme">Remember me</label>
	</div>

	<br><br><br><br><br><br><br><br><br><br>

		<a href="interface.html" id="cancellogin"><button id="cancellogin" onclick="busines.html" id="canel">Back</button></a>

	<div class="forgot">
		<label id="forgot">Forgot </label> <a href="forgot-password.php">password</a>
	</div>

</body>
</html>