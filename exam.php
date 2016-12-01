<head>
	<meta charset="UTF-8">
	<title>online exam</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="loginval.php"><img src="images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li class="active">
					<a href="index.html">Home</a>
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
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
if(!(is_numeric($_REQUEST['var1'])))
{
	echo "Error".mysql_error();
}
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
session_start();
$id=$_REQUEST['var1'];
$rightans=$_REQUEST['rans'];
$ques=$_REQUEST['ques'];
$option1 = $_REQUEST['op1'];
$option2 = $_REQUEST['op2'];
$option3 = $_REQUEST['op3'];
$option4 = $_REQUEST['op4'];
$answer = $_REQUEST['ans'];
$rand=$_REQUEST['var2'];
//$id=$_REQUEST['var1'];
$f=$_REQUEST['subb'];



$str  = "insert ignore into answer(question,op1,op2,op3,op4,ans,rans,userid)values('$ques','$option1','$option2','$option3','$option4','$answer','$rightans','".$_SESSION["userid"]."')";
$strres = mysqli_query($con,$str);


if($id==10)
{
	echo "<script>window.location='result.php';</script>";
}


	//$rand=rand(1,2);
$quer="select * from $f group BY rand()";
$sql=mysqli_query($con,$quer);
$row=mysqli_fetch_array($sql);
//$ques=$row['questionid'];
$id=$id+1;
?>

<html>
<body>
 <h1 align="center" style="font-family:Tahoma, Geneva, sans-serif; color:#06F">Welcome to Test</h1>

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
</label>
 <label></label> <br />
  <input type="hidden" value="<?php echo $ques;?>"  name="quesid"/>
 <input type="hidden" value="<?php echo $row['ans'];?>"  name="rans"/>
 <input type="hidden" value="<?php echo $row['question'];?>" name="ques" />
 <input type="hidden" value="<?php echo $row['op1']?>" name="op1" />
 <input type="hidden" value="<?php echo $row['op2']?>" name="op2" />
 <input type="hidden" value="<?php echo $row['op3']?>" name="op3" />
 <input type="hidden" value="<?php echo $row['op4']?>" name="op4" />
  <input type="hidden" value="<?php echo $f?>" name="subb" />
 <input type="submit" value="Next" />
</form>
</body>
</html>