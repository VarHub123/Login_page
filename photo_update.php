<?php
include("connection.php");
error_reporting(0);

session_start();
$user_prof=$_SESSION['user_name'];
	if($user_prof==true){
		
	}
	else{
		header("location: login_index.php");
	}


// check if the user has clicked the button "UPLOAD" 

// $id = mysqli_real_escape_string($con, $_GET['id']);
$id=$_GET['id'];
echo $id;

if(isset($_GET['uploadfile'])) {

$file_name= $_FILES['futu']['name'];
$temp_name= $_FILES['futu']['tmp_name'];
$folder='image/'.$file_name;
$try=mysqli_query($con, $sql);

      $sql="UPDATE student SET img_src='$folder' WHERE id='$id'";
	  $file= move_uploaded_file($temp_name,$folder);
			
if($try || $file){
	// echo "helo";
		header('location: database_table.php');
}
     else{
            echo "Failed to upload image";
    }

}
?> 