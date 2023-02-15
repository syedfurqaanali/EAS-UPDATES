<?php
include "timeTable.php";
//delete start
if(isset($_GET["del"])){
	@$id=intval($_GET['id']);
	@$name=$_GET['name'];
	$query=$db->prepare("DELETE FROM timeTable_Upload where id=?");
	$query->execute(array($id));
	$x=$query->fetch(PDO::FETCH_OBJ);
	@unlink("uploads/".$name);
}


if (isset($_POST['submit'])) {
	$uploads_dir="uploads/";
	$maxSize   =2000000;
	$type      =$_FILES['file']["type"];
	$name      =$_FILES['file']["name"];
	$tmp_name  =$_FILES['file']["tmp_name"];
	$fileExtension=explode(".", $name);
	$fileExtension=end($fileExtension);

	$n1=rand(1,10000);
	$n2=date("ymd");
	$n3=time();
	@$newName=$n1.$n2.$n3.".".$fileExtension;

	$filePath=$uploads_dir.$newName;
	if (empty($name)) {
		echo "<h1>Please Select a file</h1>";
		
	}elseif ($_FILES["file"]["size"]>$maxSize) {
		echo "Please Select max size = 2 MB";
	}elseif ($type=="image/jpeg" || $type=="image/png" || $type=="image/webp" || $type=="image/bmp" || $type=="image/gif"  || $type=="image/gif" || $type=="application/pdf"){

		move_uploaded_file($tmp_name,$filePath);
		$add=$db->prepare("INSERT INTO timeTable_Upload SET fileName=?");
		$ok=$add->execute(array($newName));
		if($ok){
			echo"save to database";
			header("Refresh:2");

		}else{
			echo "Not Saved";
		}
		
	}

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload,Save,Delete</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<div style="padding: 20px; border: 5px solid red;">
			<input type="file" name="file" value="">
			
		</div><br>
		<button type="submit" name="submit">Upload</button>
	</form>
	<hr>
	<h1>Time Table List</h1>
	<?php
	$query=$db->prepare("SELECT * FROM timeTable_Upload where id");
	$query->execute(array());
	$list=$query->fetchAll(PDO::FETCH_OBJ);
	foreach ($list as $list2) { ?>
		<div style="float: left;border: 2px solid red;width: 200px;height: 100px;margin: 5px;">
			<img src="uploads/<?php echo $list2->fileName;?>" style="width:200px, height: 100px;">
			<a href="?del&id=<?php echo $list2->id;?>&name=<?php echo $list2->fileName;?>"><button style="color: red" type="submit">Delete</button>
			</a>
			
		</div>

	}





	?>




</body>
</html>