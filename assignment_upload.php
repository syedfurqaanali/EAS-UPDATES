<?php

	
	$subject = $_POST['subject'];
	$uploadDate = $_POST['uploadDate'];
	$expiryDate= $_POST['expiryDate'];
	$facuAssignmentUpload = $_POST['facuAssignmentUpload'];

	//Database connection
	$conn = new mysqli('localhost','root','','assignmentUpload');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into assignmentTable(subject, uploadDate, expiryDate, facuAssignmentUpload) values(?,?,?,?)");
		$stmt->bind_param("sssb",$subject,$uploadDate,$expiryDate,$facuAssignmentUpload);
		$stmt->execute();
		echo "assignment uploaded successfully...";
		$stmt->close();
		$conn->close();
	}

 
?>