
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$id = $_REQUEST['var1'];
echo "<h3 align='center'>Are you sure to delete</h3>";
echo "<center><a href='delete.php?$id'>Yes</a></center>";
echo "<center><a href='userprofiler.php'>NO</a></center>";


?>