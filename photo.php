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

// check if the user has clicked the button "UPLOAD";

$id=$_GET['id'];
// echo $id;

if(isset($_POST['uploadfile'])) {

$file_name= $_FILES['futu']['name'];
$temp_name= $_FILES['futu']['tmp_name'];
$folder='image/'.$file_name;


      $sql="UPDATE student SET img_src='$folder' WHERE id='$id'";
	   // echo $sql;
	   
	   
			$try=mysqli_query($con, $sql);
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
<!DOCTYPE html>

<html>

 <head>
<style>
	  body{
		  margin-top: 14%;
		  margin-left: 36%;
		  margin-right: 36%;
		  
		  padding-left: 7%;
		  padding-right: 9%;
		  padding-top: 20px;
		  padding-bottom: 20px;
		  
		  border-style: solid;
		  background-color: aliceblue;
	  }
	  
	  form{
		  // background-color: #a13b43;
		  // margin-left: 9%;
		text-align: center;
		  margin-bottom: 6px;

	  }

	  }
    </style>

</head>

 <body>
         <form method="post" action="" enctype="multipart/form-data">

                  <input type="file" name="futu" ><br>

				 <input type="submit" name="uploadfile">

        </form>

</body>

</html>