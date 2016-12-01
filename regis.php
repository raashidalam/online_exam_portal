<?php 
$f=$_POST['f'];
$m=$_POST['m'];
$l=$_POST['l'];
$u=$_POST['u'];
$p=$_POST['p'];
$w=$_POST['w'];
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$data="insert into registration(name,userid,password,dept,rollno,pquestion) values('$f','$m','$p','$u','$l','$w')";
if( mysqli_query($con,$data))
{
	//echo "successfully inserted";
echo "<p>Registration successfully</p>
<a href='user.html'>Go to Login Page</a>";
}
else{
	echo "unable to insert<br>".mysqli_error($con);
}
mysqli_close($con);
?>
<html>
<body>

<body>
</html>