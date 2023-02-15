<?php
try{
	$db=new PDO("mysql:host=localhost;dbname=timeTable_upload;charset=utf8","root","");


} catch (PDOException $e){
	echo $e->getmessage();
}
?>