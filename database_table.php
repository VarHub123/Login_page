<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>

 <html>
<head>
    <title>Display records</title>
	<a href="Student.php"><img src="contact-form.png" width="23px" height="23px;" style="margin-left: 5px; margin-top:4px;"></a>
	<a href="search.php"><img id="src" src="search-interface-symbol.png" width="23px" height="23px" style="margin-left: 6px; margin-top: 5px;"></a>

    <style>
	
	*{
		font-family: popins;
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
    </style>
</head>

<body bgcolor="#b8e1e1">
<table>
	<tr>
		<th>Serial Numbee</th>
		<th>Image</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Qualification</th>
		<th>Caste</th>
		<th>Gender</th>
		<th>Height (in cm)</th>
		<th colspan="3">Operation</th>
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



$select="SELECT * FROM student";
$query=mysqli_query($con,$select);
$total=mysqli_num_rows($query);
if($total!=0){
	while($data=mysqli_fetch_assoc($query)){	
	echo "<tr>
		
       <td>".$data ['id']."</td>
       
	   <td> <img src='".$data ['img_src']."' height='125px' width='75px'></td>
	   
	   <td>".$data ['name']."</td>       
       <td>".$data ['phone']. "</td>
       <td>".$data ['class']."</td>
	   <td>".$data ['caste']."</td>
	   <td>".$data ['gender']."</td>
	   <td>".$data ['height']."</td>
  
	   
	
       <td><button id='btn1'><a href ='edit.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Edit data<b></a></button></td>
       <td><button id='btn2'><a href ='delete.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Delete<b></a></button></td>	 
       <td><button id='btn3'><a href ='photo.php?id=$data[id]' style='color: white; padding-left: 2px; padding-right: 2px;'><b>Re-upload photo<b></a></button></td>	 
			</tr>";
}
	}
ELSE{
	
	echo"<H2 style='color: red; text-align: center;'>No data found...</H2>";
}
?>
</table>
</body>
</html>