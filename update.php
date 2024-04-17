<?php
include "connection.php";
error_reporting(0);
session_start();
$user_prof=$_SESSION['user_name'];
if($user_prof==true){
	
}
else{
	header("location: login_index.php");
}
if($_GET['update'])
	{		
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$name = mysqli_real_escape_string($con, $_GET['name']);
	$phone = mysqli_real_escape_string($con, $_GET['phone']);
	$class = mysqli_real_escape_string($con, $_GET['class']);
	
		if(empty($name) || empty($phone) || empty($class)) {	
			if(empty($name)) {
				echo '<font color="red">Name field is empty.</font><br>';
			}
		if(empty($phone)) {
				echo '<font color="red">Age field is empty.</font><br>';
			}
		if(empty($class)) {
				echo '<font color="red">Email field is empty.</font><br>';
			}		
					}

		else {
			$sql="UPDATE student SET name='$name',phone='$phone',class='$class' WHERE id='$id'";

			$result = mysqli_query($con,$sql );
		
			if($result){
					echo"data updated successfully...";
			}

			else{
					echo "oops failed...";
			}
		}
	}
	

header ("location: database_table.php");
?>