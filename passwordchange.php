<?php 
$m=$_POST['m'];
//$f=$_POST['u'];
$k=$_POST['k'];
$p=$_POST['p'];
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$sql="select * from registration where pquestion='$k' and userid='$m' ";
mysqli_query($con,$sql);
$retival=mysqli_query($con,$sql);
	if(mysqli_num_rows($retival)>0)
	{
	$sql="update registration set password='$p' where pquestion='$k' and userid='$m' ";
	mysqli_query($con,$sql);
	echo "<script>
		window.alert('password change sucessfully');
</script>";
	}
	else
	{
		
		echo "<script>
		window.alert('incorrect pet name and userid');
</script>";
	}
	//header("location:password.html");
	mysqli_close($con);
?>
