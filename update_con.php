<?php
session_start();
$user_prof=$_SESSION['user_name'];
if($user_prof==true){
	
}
else{
	header("location: login_index.php");
}
include "connection.php";
error_reporting(0);

if(isset($_GET['update'])){		
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$name = mysqli_real_escape_string($con, $_GET['name']);
	$phone = mysqli_real_escape_string($con, $_GET['phone']);
	$class = mysqli_real_escape_string($con, $_GET['class']);
	$height = mysqli_real_escape_string($con, $_GET['height']);
	$caste = mysqli_real_escape_string($con, $_GET['caste']);
	
	if(empty($name) || empty($phone) || empty($class) || empty($height)) {	
			if(empty($name)) {
				echo '<font color="red">Name field is empty.</font><br>';
			}
		if(empty($phone)) {
				echo '<font color="red">Phone field is empty.</font><br>';
			}
		if(empty($class)) {
				echo '<font color="red">class field is empty.</font><br>';
			}
				if(empty($height)){
					echo '<font color="red">height field is empty.</font><br>';
				}
				if(empty($caste)){
					echo '<font color="red">caste field is empty.</font><br>';
				}
		}
		
		
		else{
	
			$sql="UPDATE student SET name='$name',class='$class',height='$height' ,phone='$phone' ,caste= '$caste' WHERE id='$id'";
			// print_r($sql);
			$result = mysqli_query($con,$sql);
		
			if($result){
					
header ("location: database_table.php");
			}

			else{
					echo "oops failed...";
			}
		}
	}
	
?>