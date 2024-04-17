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

$id=$_GET['id'];

$query="SELECT * FROM student where id='$id'";
$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);
$result=mysqli_fetch_array($data);
?>


<html>
<head>	
	<title>Edit Data</title>
	<style>
	
	form{
		border-style: groove;
		border-radius: 9px;
		border: outset pink 5px;
		height: 109mm;
		width: 29%;
		Position: absolute;
		top: 13%;
		Left: 450px;
		background-color: #d3a6ea;
   }
	#Name-btn{
		padding-top: 11px;
		padding-bottom: 7px;
		padding-left: 10px;
		padding-right: 105px;
		
		margin-left: 13%;
		border-radius: 4px;
		border: solid 1px ;
		margin-top: 12%;
	}
	#Phone-btn{
		padding-top: 11px;
		padding-bottom: 7px;
		padding-left: 10px;
		padding-right: 105px;
		
		margin-left: 52px;
		margin-top: 16px;
		border-radius: 4px;
		border: solid 1px ;
	}
	#class-btn{
		
		border: solid 1px ;
		margin-top:16px;
		margin-left: 53px;
		padding-top: 11px;
		padding-bottom: 7px;
		padding-left: 10px;
		padding-right: 105px;
		border-radius: 4px;
	}
	#hei-btn{
		border: solid 1px ;
		margin-top:16px;
		margin-left: 53px;
		padding-top: 11px;
		padding-bottom: 7px;
		padding-left: 10px;
		padding-right: 105px;
		border-radius: 4px;
		
	}
	#caste-btn{
		border: solid 1px ;
		margin-top:16px;
		margin-left: 53px;
		padding-top: 11px;
		padding-bottom: 7px;
		padding-left: 10px;
		padding-right: 105px;
		border-radius: 4px;
		
	}
	#Submit{
		padding-left: 80px;
		padding-right: 80px;
		padding-top: 7px;
		padding-bottom: 6px;
		font-size: 16;
		font-color: white;
		
		border-radius: 9px;
		background-color:#bebbc8;
		margin-left: 22%;
		margin-right: 50%;
		margin-top:8%;
		border: outset 2px ;
	
	}
	#try{
		margin-top:15%;	
		margin-left: 34px;
		
	}
	#file{
		margin-left:35px;
		margin-top: 14px;
	}
	#logout{
		margin-left: 3%;
		font-size: 4mm;
	}
	#file{
		margin-left:35px;
		margin-top: 14px;
	}
	</style>
</head>

<body bgcolor="#efcbff">
	<a href="database_table.php"><img src="home.png" width="32px" height="35px" ></a>
	<br><br>
	<form autocomplete="off" method="get" action="update_con.php">
			<div><input type="hidden" name="id" value="<?php echo $result['id']; ?>"></div>
			<input id="Name-btn" type="text" name="name" placeholder="Edit your Name" value="<?php echo $result['name']; ?>">
			<input id="Phone-btn" type="text" name="phone" placeholder="Edit your Phone" value="<?php echo $result['phone']; ?>">
			<input id="class-btn" type="text" name="class" placeholder="Edit your Class" value="<?php echo $result['class']; ?>">
			<input id="hei-btn" type="text" name="height" placeholder="Edit your height" value="<?php echo $result['height']; ?>">
			<input id="caste-btn" type="text" name="caste" placeholder="Edit your caste" value="<?php echo $result['caste']; ?>">
			<input id="Submit" type="submit" name="update" value="update"></div>
	</form>
</body>
</div>
</html>