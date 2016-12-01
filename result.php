<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result</title>
<script type="text/javascript">
function lod(){
window.history.forward(1);
alert("Examination is Over Press Ok to Continue.......");


}
</script>
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
				
				<li>
				<a href="logout.php">Logout</a>
				</li>
				
				
			</ul>
		</div>
	</div>
	
	<h1 class="a">Your Result is:<h1>
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
$count=0;

$sql="select * from answer";
$result=mysqli_query($con,$sql);
while($res = mysqli_fetch_array($result))
{  

if($res["ans"]==$res["rans"])
	{
		$count = $count+1;
	
	}
	
}


//$a="truncate table result";
//mysqli_query($con,$a);
$count=$count;
$totalmark= 10;
$per = ($count/$totalmark)*100;
$randd=rand(1,1000);
$currdate =  date("d/m/y");
$currtime =  time();

$x="insert into result(examid,userid,name,marks_obtain,total_marks,percentage,date,time,subject) values('$randd','".$_SESSION["userid"]."','".$_SESSION["name"]."','$count','$totalmark','$per','$currdate','$currtime','".$_SESSION["sub"]."')";
mysqli_query($con,$x);
$sql="select * from result";
$s=mysqli_query($con,$sql);
$userid="";
$marks_obtain ="";
$total_marks ="";
$percentage ="";
$date="";
$time="";
while($res=mysqli_fetch_array($s))
{ 

$marks_obtain= $res["marks_obtain"];
$total_marks= $res["total_marks"];
	$percentage = $res["percentage"];
	$date=$res["date"];
$time=$res["time"];
//echo $currdate;
}
?>
<form action="result.php" method="post">
<div align="center">

<table width="300" border="0"  background:color="red"  style="border:#999 1px solid; background-image:url(../Images/result.bmp); background-repeat:no-repeat; text-align:"center">
  <tr>
    <td width="94">&nbsp;</td>
    <td width="90">&nbsp;</td>
  </tr>
  <tr>
    <td>User id</td>
    <td align="right"><?php echo $_SESSION["userid"]; ?></td>
  </tr>
   <tr>
    <td>Name</td>
    <td align="right"><?php echo  $_SESSION["name"]; ?></td>
  </tr>
  <tr>
    <td>Marks obtain</td>
    <td align="right"><?php echo $marks_obtain; ?></td>
  </tr>
  <tr>
    <td>Total marks</td>
    <td align="right"><?php echo $total_marks; ?></td>
  </tr>
  <tr>
    <td>percentage</td>
    <td align="right"><?php echo $percentage; ?></td>
  </tr>
   <tr>
    <td>Time</td>
    <td align="right"><?php echo $time; ?></td>
  </tr>
  <tr>
   <tr>
    <td>Date</td>
    <td align="right"><?php echo $date; ?></td>
  </tr>
 
</table>

</div>

</form>
</body>
</html>


