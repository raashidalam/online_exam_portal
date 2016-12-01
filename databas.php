<?php 
$f=$_POST['sub'];
$datas="databases"
$com="compiler";
$web="web_tech";
$data="data_structure";

if(strcasecmp($f,$datas)
{
	$sql="select * from $f";
		mysqli_query($con,$sql);
	//$cont="select count(*) from $f";
	$retival=mysqli_query($con,$sql);
	echo "<form action="abc.php" method="post">
	<tr><td><?php $retival=mysqli_query($con,$sql);
	if(mysqli_num_rows($retival)>0)
	{
		while($row=mysqli_fetch_assoc($retival))
		{
			echo "{$row['qno']} "."{$row['question']}<br>"."<input type="radio" name : {$row['dept']}<br>";
}
<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
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
					<a href="update.html">Edit profile</a>
				</li>
				<li>
					<a href="view.html">view profile</a>
				</li>
				
			</ul>
		</div>
	</div>
	
	<h1 class="a">Welcome to Online portal<h1>
</body>
</html>