<!doctype html>
<html>
<head>
<title>Login page</title>


<style>
	#uname-btn{
		padding-top: 15px;	
		margin-bottom: 26px;
		
		padding-right:16%;
		padding-left: 6px;
		padding-bottom: 6px;
		
		border-radius:4px;
		border-top: hidden;
		border-left: hidden;
		border-right: hidden;
		border-bottom: 2px solid black;
	}
	#pswrd-btn{	
		padding-top: 15px;	
		margin-bottom: 26px;
		
		padding-right:16%;
		padding-left: 6px;
		padding-bottom: 6px;
		
		border-top: hidden;
		border-left: hidden;
		border-right: hidden;
		border-bottom: 1px solid black;
		border-radius:4px;
		
		
	}
	form{
		
		border: inset 2px;
		border-radius: 9px;
		border-color:#a4bbe3;
		width: 23%;
		padding-left: 3%;
		padding-top: 4%;
		padding-bottom: 4%;
		
		background:#9d936;
	

		margin-right: 39%;
		margin-left: 28%;
		margin-top: 1%;
	}
	.gen{
		margin-top: 4px;
		margin-bottom: 5px;
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
		
		padding-top: 2px;
		padding-bottom: 2px;
		padding-left:12px;
		padding-right: 12px;
	}
	#s{
		margin-top: 7%;
	}
	
	
</style>
</head>
<body>	
<div id="s">
<span id="spa"> Login Page</span>
<form action="ConnectionLogin.php" onsubmit="return validate()" method="POST" autocomplete="off">		
		<p id="userError" class="error"></p>
			
		<input placeholder="Enter Username or phone" id="uname-btn" type="text" name="uname" ><br>
		<p id="passError" class="error"></p>
		
		<input id="pswrd-btn" type="password" placeholder="Password" name="pswrd" > <br>
			<a href="" onclick="msg()"> forget password ?</a><br>
			<a href="signup.php">SignUp</a>
			
		<input type ="submit" id="btn" name="submit" value="Login"></div>
		<script src="main_page.js">	</script>
		
		</body>
		</div>
		</form>
	</html>