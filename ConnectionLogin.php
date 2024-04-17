<?php
// session_start();
session_start();

$user_prof=$_SESSION['user_name'];
$user_pswrd=$_SESSION['user_pswrd'];
$user_prof=$_SESSION['user_phone'];

if($user_prof==true && $user_pswrd==true){
	
}
else{
	header("location: login_index.php");
}

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
	$uname=$_POST['uname'];
	$pswrd=$_POST['pswrd'];
	$phone=$_POST['uname'];

$query="SELECT * FROM login where uname='$uname' && phone='$phone' || pswrd='$pswrd' ";
$select=mysqli_query($con,$query);
$total=mysqli_num_rows($select);

	
if($total==true){
	$_SESSION['user_name']=$uname;
	$_SESSION['user_pswrd']=$pswrd;
	$_SESSION['user_phone']=$phone;
	
	header ("location: Student.php");
	
}
else{
	echo "helo";
}
}
?>