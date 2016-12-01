</head>
<body onload="lod();">
<head>
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
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="password.html">change password</a>
				</li>
				<li>
					<a href="update.html">profile</a>
					</li>
				<li>
				<a href="latherboard.php">Letherboard</a>
				</li>
				</li>
				<li>
				<a href="logout.php">Logout</a>
				</li>
				
				
			</ul>
		</div>
	</div>
</body>
</html>
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
 <h1 class="a">Latherboard</h1>
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
   <th style="background-color:#CCC">
Number_of_examination
  </th  >
  
  </tr>
  <tr>
  <?php
  $sql="select r.name,d.userid,avg(d.percentage) as percentage,count(d.userid) as number_of_examination from registration r,result d where r.userid=d.userid group by r.name";
$x=mysqli_query($con,$sql);
while($res=mysqli_fetch_array($x))
{ 
echo "<tr style='align=:right'>
    <td>{$res['userid']}</td>
  
    <td >{$res['name']}</td>

    <td >{$res['percentage']}</td>
  
 
    <td >{$res['number_of_examination']}</td>
	</tr>";
}
?>
 </table >
   
 
