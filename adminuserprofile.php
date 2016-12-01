<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->

	<meta charset="UTF-8">
	<title>online exam</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li class="active">
					<a href="adminhome.html">Home</a>
				</li>
				<li>
					<a href="adminquestion.php">Question Feed</a>
				</li>
				<li>
					<a href="userprofiler.php">Register User</a>
				</li>
				
				
			</ul>
		</div>
	</div>
	
	
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$id=$_REQUEST['var1'];
$sql="select r.name,r.userid,r.rollno,d.dname  from registration r,department d where r.Did=d.Did and r.userid='$id'";
$res=mysqli_query($con,$sql);
while($record=mysqli_fetch_array($res))
{
	$name=$record['name'];
	$userid=$record['userid'];
	$dept=$record['dname'];
	$rollno=$record['rollno'];
	
}
?>
<html>
<body>
<h2 align="center"><i>User profile Information</i></h2>
<form action="adminuserprofile.php" method="post">

<table width="360"  align="center" border="0" background:color="red" style="border:#999 1px solid; text-align:center ">
  <tr >
    <td width="101" align ="right">Name</td>
    <td width="134" align="right"><?php echo $name;?></td>
  </tr>
  <tr>
    <td align="right">User id</td>
    <td align="right" ><?php echo $userid;?></td>
  </tr>
  
  <tr>
    <td align="right">Roll no</td>
    <td align="right"><?php echo $rollno;?></td>
  </tr>
 <tr>
    <td align="right">Dept</td>
    <td align="right" ><?php echo $dept;?></td>
  </tr>
    
</table>
</form>
 
     
</body>
</html>