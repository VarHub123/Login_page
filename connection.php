<?php
error_reporting(0);
session_start();
$user_prof=$_SESSION['user_name'];
	if($user_prof==true){
		
	}
	else{
		header("location: login_index.php");
	}

$con= mysqli_connect('localhost','root','','school');

if(!$con){
	echo "connection fail due to--> ",mysqli_error($con);
}

error_reporting(0);
if(isset($_POST['submit'])){
	
$file_name= $_FILES['futu']['name'];
$temp_name= $_FILES['futu']['tmp_name'];
$folder='image/'.$file_name;
move_uploaded_file($temp_name,$folder);

	$Name=$_POST['name'];
	$Phone=$_POST['phone'];
	$Class=$_POST['Class1'];
	$caste=$_POST['caste'];
	$gen=$_POST['gender'];
	$height=$_POST['height'];

$sql = "INSERT INTO student (img_src, phone, name,  class, gender, caste, height) VALUES ('$folder','$Phone','$Name','$Class','$gen','$caste','$height')";

$result=mysqli_query($con,$sql);

if($result){
header("location: database_table.php");
}
else{
	echo "error---->".$con->mysqli_error;
		exit(0);
}
}

?>