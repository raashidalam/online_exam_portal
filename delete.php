<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$id= $_REQUEST['var1'];
$sql="delete from registration where userid='$id' ";
mysqli_query($con,$sql);
$result=mysqli_query($con,$sql);
if($result)
{
	header("location:userprofiler.php");
}
else{
	echo mysql_error();
}
?>
