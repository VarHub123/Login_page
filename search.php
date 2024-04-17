<doctype html>
<html>
	<head>
	<title>
		Search your data
	</title>

		<style>
				#search_btn{
		margin-left: 69px;
		margin-top: 4px;
		margin-bottom: 8px;
		border: solid 1px ;
		padding-top: 9px;
		padding-bottom: 5px;
		padding-left: 15px;
		padding-right: 100px;
		border-radius: 15px;

	}

	#search{
		padding-left: 11px;
		padding-right: 11px;
		padding-top: 5px;
		padding-bottom: 4px;
		font-size: 15;
		font-color: white;
		
		border-radius: 9px;
		background-color:#bebbc8;
		margin-left: 3%;
		margin-right: 50%;
		margin-top:2%;
		border: outset 2px ;
	
	}
	#cont{
		margin-left: 24%;
		// margin-top: 2%;
	}
	
	
	
	#logout{
		margin-bottom: 11px;
		margin-left: 7px;
		font-size: 4mm;
		margin-top: 4px;
	}
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
       th,td {
            font-weight: bold;
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
		#btn2{
				background-color: #ff0a00;
				border-radius: 7px;
		}
		#btn1{
				background-color: #33a733;
				border-radius: 7px;
		}
		#btn3{
				background-color: #5b8ade;
				border-radius: 7px;
		}
		#btn4{
			background-color: #9460e6;
;
			border-radius: 7px;
		}
    
	
		</style>
	</head>
	
<body bgcolor="#b8e1e1">
	<a href="database_table.php"><img src="home.png" width="32px" height="35px" style="padding-right: 10%;"></a>

	<div id="cont">
	<form method="post" action="" autocomplete="off">
	<input type="text" id="search_btn" name="search" placeholder="Enter your any information">
	<input  id="search" type ="submit" name="search_btn" value="Search" onclick="pop()">
	</form>
	
	
	</div>
	
<table>
	<tr>
		<th>Serial Numbee</th>
		<th>Image</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Qualification</th>
		<th>Caste</th>
		<th>Gender</th>
		<th>Height</th>
		<th colspan="4">Operation</th>
		</tr>

 
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





// $total=mysqli_num_rows($query);

if(isset($_POST['search_btn'])){
	$search=$_POST['search'];
	
		$select="SELECT * FROM student where id='$search' or name='$search' or phone='$search' or class='$search' or caste='$search' or gender='$search' or height='$search'";
		$query=mysqli_query($con,$select);
		
	while($data=mysqli_fetch_assoc($query)){	
	echo "<tr>
		
       <td>".$data ['id']."</td>
       
	   <td> <img src='".$data ['img_src']."' height='100px' width='70px'></td>
	   
	   <td>".$data ['name']."</td>       
       <td>".$data ['phone']. "</td>
       <td>".$data ['class']."</td>
	   <td>".$data ['caste']."</td>
	   <td>".$data ['gender']."</td>
	   <td>".$data ['height']."</td>
	   
	   <td><button id='btn1'><a href ='edit.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Edit data<b></a></button></td>
       <td><button id='btn2'><a href ='delete_for_search.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Delete<b></a></button></td>	 
       <td><button id='btn3'><a href ='photo.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Re-upload photo<b></a></button></td>	 
	   <td><button id='btn4'><a href ='copy_paste.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Copy<b></a></button></td>	 
	   </tr>";
	}
}

		

	?>
	</body>
	
</html>