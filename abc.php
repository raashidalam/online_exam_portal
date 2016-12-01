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
					<a href="loginval.php">Home</a>
				</li>
				<li>
					<a href="changepass.html">change password</a>
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
	
</body>
</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$f=$_POST['sub'];
	$_SESSION['sub']=$f;
$datas="databas";
$com="compiler";
$web="web_tech";
$data="data_structure";
$analog="analog";
$signal="signal";
$s="signal_system";
//echo $x;
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
if(strcasecmp($f,$datas)==0)
{
$quer=" SELECT * FROM databas group BY rand() ";
 $sql=mysqli_query($con,$quer);	
 $s="databas";


}
elseif(strcasecmp($f,$web)==0)
{
	$quer=" SELECT * FROM web_tech group by rand()  ";
 $sql=mysqli_query($con,$quer);
 $s="web_tech";

}
elseif(strcasecmp($f,$com)==0)
{
	$quer=" SELECT * FROM compiler group by rand() ";
 $sql=mysqli_query($con,$quer);
 $s="compiler";

}
elseif(strcasecmp($f,$data)==0)
{
	$quer=" SELECT * FROM data_structure group BY rand() ";
 $sql=mysqli_query($con,$quer);
 $s="data_structure";
}

elseif(strcasecmp($f,$analog)==0)
{
	$quer=" SELECT * FROM analog group by rand()";
 $sql=mysqli_query($con,$quer);
 $s="analog";
}
elseif(strcasecmp($f,$signal)==0)
{
	//echo "gdhgh";
	//$rand=rand(1,00);
	echo $rand;
$quer="select * from signal_system group by rand() ";
$sql=mysqli_query($con,$quer);
$s="signal_system";
}


 $a="truncate table answer";
mysqli_query($con,$a);

//$_SESSION['cate']=$_POST['cate'];
//$rand=rand(1,3);
//$sql=mysql_query("Select * from tempques order by rand()");
$row=mysqli_fetch_array($sql);
//$ques=$row['questionid'];
$id=1;
?>
<html>
<body>
 <h1 align="center" style="font-family:Tahoma, Geneva, sans-serif; color:#06F">Welcome to test</h1>

<form action ="exam.php?var1=<?php echo $id;?>&var2=<?php  echo $rand ?>"method="Post" name="formp">
Question : <label><?php echo $id;?>:</label><label><?php echo $row['question'];?></label><br />

<p>
    <span >
    <input type="radio" name="ans" value="<?php echo $row['op1']?>" id="ans_0" />
<?php echo $row['op1']?><br />
<input type="radio" name="ans" value="<?php echo $row['op2']?>" id="ans_1" />
<?php echo $row['op2']?><br />
<input type="radio" name="ans" value="<?php echo $row['op3']?>" id="ans_2" />
<?php echo $row['op3']?><br />
<input type="radio" name="ans" value="<?php echo $row['op4']?>" id="ans_3" />
<?php echo $row['op4']?><br />
 <label></label> <br />
  <input type="hidden" value="<?php echo $ques;?>"  name="quesid"/>
 <input type="hidden" value="<?php echo $row['ans'];?>"  name="rans"/>
 <input type="hidden" value="<?php echo $row['question'];?>" name="ques" />
 <input type="hidden" value="<?php echo $row['op1']?>" name="op1" />
 <input type="hidden" value="<?php echo $row['op2']?>" name="op2" />
 <input type="hidden" value="<?php echo $row['op3']?>" name="op3" />
 <input type="hidden" value="<?php echo $row['op4']?>" name="op4" />
  <input type="hidden" value="<?php echo $s;?>" name="subb" />
 <input type="submit" value="Next" />
</form>
</body>
</html>

 