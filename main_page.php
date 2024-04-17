<?php
	session_start();
	session_unset();
	session_destroy();

?>
<html>
<head>
<style>
body{
	background-color: #8296e4;
}
#sign{
		font-size: 20px;
		color: white;
}
#login{
			color: white;
		font-size: 20px;
}
.class{
	text-align: center;
	border: inset 3px #b4bbea;
	padding: 5%;
		margin-left: 37%;
		margin-right: 37%;
		margin-top: 12%;
		background-color: #9ea5e7;
		border-radius: 9px;
 }

button{
	background-color: #6f6fd5;
	border-radius: 5px;
	padding-left: 6px;
	padding-right: 6px;
}
form{
	boder-style: groove;
}
</style>
</head>

<body>
<div class="class">
<table>

<button><a href="signup.php" id="sign" >SignUp</a></button><br><br>
<button><a href="login_index.php" id="login">Login</a></button>
</table>
</div>
</body>
</html>