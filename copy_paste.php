<html>
<head>
<style>
form{
	text-align: center;
	
}
#input{
	border-radius: 4px;
	padding: 5px;
}
#btn1{
	background-color: #a8b9df;
	border-radius: 3px;
}
</style>
</head>

<body>
<form method="get" autocomplete="off">
<input type="text" name="copy1" id="input">
<input type="submit" name="btn" id="btn1" value="copy">
</form>

<?php
include("connection.php");
error_reporting(0);
$id=$_GET['id'];
// echo $id;

if(isset($_GET['btn'])){
	$new = $_GET['copy1'];
	?>
<script>
		navigator.clipboard.writeText('<?php echo $new; ?>');
</script>
<?php  
	}
?>
</body>
</html>