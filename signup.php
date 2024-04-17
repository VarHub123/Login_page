<?php
session_start();
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "school";

$con = mysqli_connect($host, $user, $pass,$dbname);

// Check connection
if (!$con) {
  echo "connection fail due to--> ",mysqli_error($con);
}
// error_reporting(0);
error_reporting(0);
if(isset($_POST['submit'])){
	if (empty ($_POST["uname"]) || empty ($_POST["pswrd"])){
		header("location: signup.php");
	}
	else{
		$username=$_POST['uname'];
		$password=$_POST['pswrd'];
		$phone=$_POST['phone'];
		

$sql = "INSERT INTO login (uname, pswrd, phone) VALUES ('$username', '$password','$phone')";

$result=mysqli_query($con,$sql);
	
	if($result){
		echo "<script>alert('your signup is successfully completed')</script>";
		}
	else{
		echo"fail...";
	}
}}

?>

<!doctype html>
<html>
<head>
<title>Sign Up page</title>
<style>
	#uname-btn{
		padding-top: 15px;	
		margin-bottom: 26px;
		
		padding-right:16%;
		padding-left: 6px;
		padding-bottom: 6px;
		
		border-radius: 4px;
		border-top: hidden;
		border-left: hidden;
		border-right: hidden;
		border-bottom: 1px solid black;
	}
	#pswrd-btn{	
		padding-top: 15px;	
		margin-bottom: 26px;
		
		padding-right:16%;
		padding-left: 6px;
		padding-bottom: 6px;
		
		border-radius: 4px;
		border-top: hidden;
		border-left: hidden;
		border-right: hidden;
		border-bottom: 1px solid black;
		
		
	}
	form{
		border: inset 2px;
		border-radius: 9px;
		
		width: 23%;
		padding-left: 4%;
		padding-top: 4%;
		padding-bottom: 4%;
		
		border-color:#a4bbe3;
		background:#9d93d6;
		margin-right: 39%;
		margin-left: 28%;
		margin-top: 1%;
	}
	.gen{
		margin-top: 4px;
		margin-bottom: 5px;
	}
	body{
		background-color:  #8083d0 ;
	}
	.error{
		color: red;
		margin: 0px;
		text-align: left;
	}
	#spa{
		margin-left:30%; 
		font-size: 25px; 
		border: inset #adb5c9; 
		margin-bottom: 2%;
		border-radius: 4px;
		padding-top: 2px;
		padding-bottom: 2px;
		padding-left:12px;
		padding-right: 12px;
	}
	#s{
		margin-top: 7%;
	}
	
	#btn{
		padding-left: 79px;
		padding-right: 79px;
		padding-top: 7px;
		padding-bottom: 6px;
		font-size: 16px;
		font-color: white;
		
		border-radius: 9px;
		background-color:#bebbc8;
		margin-left: 9%;
		margin-right: 50%;
		margin-top:8%;
		border: outset 2px ;
	

	}
</style>
</head>
<body>	
<div id="s">
<span id="spa"> Sign Up Page</span>
<form action="" method="POST" autocomplete="off">	
	
		<input placeholder="Enter Username" id="uname-btn" type="text" name="uname" ><br>
		<input placeholder="Enter phone" id="uname-btn" type="text" name="phone" ><br>
		<input id="pswrd-btn" type="password" placeholder="********" name="pswrd" > <br>
		
		<a href="login_index.php">Click Me for login !</a><br>
		<input type ="submit" id="btn" name="submit" value="signup" onclick=" return validate()">
		</form>
		</body>
		</div>
	</html>