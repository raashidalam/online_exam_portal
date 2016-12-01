<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}

$datas="databas";
$com="compiler";
$web="web_tech";
$data="data_structure";
$analog="analog";
$signal="signal";
	$ques = $_POST["txtquestion"];
	$option1 = $_POST["txtoption1"];
	$option2 = $_POST["txtoption2"];
	$option3 = $_POST["txtoption3"];
	$option4 = $_POST["txtoption4"];
	$ans = $_POST["txtanswer"];
	
	$f = $_POST["Selectcat"];
	//echo $ques.$option1.$option2.$option3.$option4.$ans.$sub.$category;
	
	if(strcasecmp($f,$datas)==0)
{


	$sql = "insert into databas(question,op1,op2,op3,op4,ans) values ('$ques','$option1','$option2','$option3','$option4','$ans')";
	$res = mysqli_query($con,$sql);
	echo $res;
}

		
	if(strcasecmp($f,$com)==0)
{


	$sql = "insert into compiler(question,op1,op2,op3,op4,ans) values ('$ques','$option1','$option2','$option3','$option4','$ans')";
$res = mysqli_query($con,$sql);
	echo $res;
}
	
	if(strcasecmp($f,$web)==0)
{


	$sql = "insert into web_tech(question,op1,op2,op3,op4,ans) values ('$ques','$option1','$option2','$option3','$option4','$ans')";
$res = mysqli_query($con,$sql);
	echo $res;
}
	
	if(strcasecmp($f,$data)==0)
{


	$sql = "insert into data_structure(question,op1,op2,op3,op4,ans) values ('$ques','$option1','$option2','$option3','$option4','$ans')";
	$res = mysqli_query($con,$sql);
	echo $res;
}
	
	if(strcasecmp($f,$analog)==0)
{


	$sql = "insert into analog(question,op1,op2,op3,op4,ans) values ('$ques','$option1','$option2','$option3','$option4','$ans')";
$res = mysqli_query($sql);
	echo $res;
}
	
	if(strcasecmp($f,$signal)==0)
{


	$sql = "insert into signal_system(question,op1,op2,op3,op4,ans)values ('$ques','$option1','$option2','$option3','$option4','$ans')";
$res = mysqli_query($con,$sql);
	echo $res;
}
	//$sql = "insert into questionmst(question,option1,option2,option3,option4,answer,subid,category) values ('$ques','$option1','$option2','$option3','$option4','$ans','$f')";
	//$res = mysql_query($sql);
	//echo $res;
	
	if(!$res)
	{
			
echo mysqli_error($con);
		
		
	}
	else
	{
		header("location:adminquestion.php");
				

		
	}
?>

