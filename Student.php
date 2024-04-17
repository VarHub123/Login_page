<?php
error_reporting(0);
session_start();

	$user_prof=$_SESSION['user_name'];
	if($user_prof==true){
		
	}
	else{
		header("location: login_index.php");
	}
?>


<!doctype html>
<html>
<head>
<title>
		Register form 
</title>
	<style>
	*{
		font-family: popins;
	}
#form{
	top: 70px;
    height: 420px;
	border-style: groove;
	border: outset #bde0fe;
	
    width: 42%;
    Position: absolute;
    Left: 400px;
    background-color: #b0c4b1;
	border-radius: 14px;
   }
	
	#Name-btn{
		// margin-top: 4px;
		margin-left: 60px;
		border-radius: 4px;
		padding-top: 9px;
		padding-bottom: 5px;
		padding-left: 8px;
		padding-right: 45px;
		border: solid 1px;
		outline: none;
	}
	
	#Phone-btn{
		outline: none;
		margin-left: 7%;
		margin-top: 4px;
		padding-top: 9px;
		border-radius: 4px;
		padding-bottom: 5px;
		padding-left: 8px;
		padding-right: 45px;
		border: solid 1px;
	}
	
	#Class-btn{
		outline: none;
		border: solid 1px;
		margin-top:4px;
		margin-left: 65px;
		padding-top: 9px;
		padding-bottom: 5px;
		padding-left: 8px;
		padding-right: 45px;
		border-radius: 4px;
}

	#height{
		margin-left: 62px;
		margin-top: 4px;
		border: solid 1px;
		padding-top: 9px;
		padding-bottom: 5px;
		padding-left: 8px;
		border-radius: 4px;
		outline: none;
		}
	#Submit{
		padding-left: 137px;
		padding-right: 137px;
		padding-top: 7px;
		padding-bottom: 6px;
		font-size: 16px;
		font-color: white;
		
		border-radius: 9px;
		background-color:#bebbc8;
		margin-left: 10%;
		margin-right: 50%;
		margin-top:8%;
		border: outset 2px ;
	
	}
	
	#try{
		margin-top:4%;	
		margin-left: 50px;
		
	}
	#file{
		
		margin-top: 15px;
	}
	p{
		font-size: 14px;
		margin: 5px;
		text-align: left;
	}
	#link{
		margin-top: 9px;
		font-size: 14px;
		background-color: #fcf7e2;
		border-radius: 7px;
		padding-left:9px;
		padding-right: 9px;
		padding-bottom: 2px;
		border:outset 1px ;
	}
	#gen{
		
		margin-top:24px;
	}
	#caste{
		margin-top:15px;
	}
	
	</style>
</head>

<body bgcolor="#a2d2ff">
<a href="database_table.php"><img src="information.png" width="26px" height="26px" style="margin-left: 6px; margin-top: 5px;"></a>
<a href="main_page.php"><img id="src" src="logout.png" width="23px" height="23px" style="margin-left: 6px; margin-top: 5px;"></a>
<a href="search.php"><img id="src" src="search-interface-symbol.png" width="23px" height="23px" style="margin-left: 6px; margin-top: 5px;"></a>

<div id="form">
		<form action="connection.php" name='myForm' method="POST" autocomplete="off" enctype="multipart/form-data" onsubmit="return valid()" >
		
		<div id="try">
		
		Name: <input id="Name-btn" placeholder="Enter Your Name" type="text"  name="name"> <span style="margin-left:0px;" id="nameError" class="error"></span><br>
		
		Phone No: <input id="Phone-btn" placeholder="Enter Your Phone" maxlength="10" type="text" name="phone"  class="formError" >
		<span id="phoneError"  style="margin-left:0px;" class="error" ></span><br>
		
		Class: <input id="Class-btn" placeholder="Enter Your Qualification" type="text" name="Class1" class="formError">
		<span id="classError" style="margin-left:120px;" class="error"></span><br>
			
		Height: <input id="height" type="text" name="height" placeholder="Enter your height (in cm)" maxlength="3">
		<span style="margin-left:0px;" id="heightError" class="error"></span><br>
		
		Gender: <input type="radio" id="gen" name="gender" value="Male" >Male
		<input type="radio" name="gender" id="gen" value="Female" >Female
		<br>
		Caste: <input type="radio" name="caste" id="caste" value="SC/ST" >SC/ST
		<input type="radio" name="caste" id="caste" value="OBC" >OBC
		<input type="radio" name="caste" id="caste" value="Genral" >Genral
		<bR>
		<input style="margin-top:7px;" type="file" id="file2" name="futu" class="formError" ><br>		
		<span style="margin-left:5px;" id="fileError" class="error"></span>

		<input  id="Submit" type ="submit" name="submit" value="Submit">
		
		
</div>

</form>

</div>
<script src="student.js"></script>
</body>	
</html>
	