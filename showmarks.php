<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database="examination";

$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}

 ?>
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
	 <h1 class="a">Score</h1>
<table width="360"  align="center" border="0" background:color="red" style="border:#999 1px solid; text-align:center ">
  <tr>
  <th style="background-color:#CCC">
Userid
  </th>
  <th style="background-color:#CCC">
  Name
  </th  >
   </th>
  <th style="background-color:#CCC">
Percentage
  </th  >
  
  
  </tr>
	
	<tr>

<?php
$id=$_REQUEST['var1'];
$sql="select r.name,r.userid,avg(d.percentage) as percentage from registration r,result d  where r.userid=d.userid and r.userid='$id'";
$ret=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($ret))
{
echo " <tr style='align=:right'>
<td>{$row['name']}</td>
<td>{$row['userid']}</td>
<td>{$row['percentage']}</td>
<tr>
<table>";
}
?>
</tr>
</body>
</html>

