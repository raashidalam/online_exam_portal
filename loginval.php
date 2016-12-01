


<?php 
session_start();
$f=$_POST['usernamee'];
$_SESSION['userid'] = "$f";

$m=$_POST['passwordd'];
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$e="EE";
$i="IT";

$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$sql="select r.name,r.rollno,r.userid,d.dname,d.Did from registration r,department d where r.Did=d.Did and r.userid='$f'  and password='$m'";
	mysqli_query($con,$sql);

	
	
	$retival=mysqli_query($con,$sql);
	if(mysqli_num_rows($retival)>0)
	{
	echo "<html>
		<head>
	<meta charset='UTF-8'>
	<title>online exam</title>
	<link rel='stylesheet' href='css/style.css' type='text/css'>
</head>
<body>
	<div id='header'>
		<div class='clearfix'>
			<div class='logo'>
				<a href='index.html'><img src='images/logo.png' alt='LOGO' height='52' width='362'></a>
			</div>
			<ul class='navigation'>
			<li class='active'>
					<a href='index.html'>Home</a>
				</li>
				<li>
					<a href='password.html'>change password</a>
				</li>
				<li>
					<a href='update.html'>Edit profile</a>
				</li>
					<li>
				<a href='latherboard.php'>Letherboard</a>
				</li>
				<li>
				<a href='logout.php'>Logout</a>
				</li>
				
				
			</ul>
		</div>
	</div>
	
	<h1 class='a'>Welcome to Online portal<h1>
</body>
</html> ";
	
		while($row=mysqli_fetch_assoc($retival))
		{
			if(strcasecmp($row['dname'],$i)==0)
			{
				$did=$row['Did'];
				$name=$row['name'];
				$dept=$row['dname'];
				$_SESSION['dept']=$dept;
				$_SESSION['name']=$name;
			//echo "name: {$row['name']} <br>"."password: {$row['password']}<br>"."dept : {$row['dept']}<br>";
		echo "<form action='abc.php' method='post' >
	     <table style='margin-left:38%;margin-top:10%;'><tr align='left'><td>Name: {$row['name']}</td> </tr><tr  align='left'><td>Department: {$row['dname']}</td></tr><tr  align='left'><td>Roll No : {$row['rollno']}</td></tr>
	
		<tr><td >Choose your subject<td>
		<td> <select name='sub'>
  	<option value=Databas>database</option>
  	<option value='Compiler'>Compiler_Design</option>
  	<option value='Web_tech'>Web tech</option>
  	<option value='Data_structure'>Data structure</option>
	</select> 
	</td></tr>
	<tr><td><input type='submit' value='Test stsrt'></td></tr>
	</table>

	</form> ";
		
		}
		elseif(strcasecmp($row['dname'],$e)==0)
		{
				$name=$row['name'];
				$dept=$row['dname'];
				$_SESSION['dept']=$dept;
				$_SESSION['name']=$name;
			//	$k="select s.sub1,s.sub2,s.sub3,s.sub4 from subject s,department d where s.did=d.Did and Did=$did ";
				//	$ret=mysqli_query($con,$k);
				//$r=mysqli_fetch_assoc($ret);
			//echo "name: {$row['name']} <br>"."password: {$row['password']}<br>"."dept : {$row['dept']}<br>";
		echo "<form action='abc.php' method='post'>
	      <table style='margin-left:38%;margin-top:10%;'><tr align='left'><td>Name: {$row['name']}</td> </tr><tr  align='left'><td>Department: {$row['dname']}</td></tr><tr  align='left'><td>Roll No : {$row['rollno']}</td></tr>
		
		<tr><td >Choose your subject<td>
		<td> <select name='sub'>
<option value='signal_system'>signal_system</option>
  	<option value='analog'>analog_system</option>
 
	</select> 
	</td></tr>
	<tr><td><input type='submit' value='Test start'></td></tr>
	</table>
	</form> ";
		}
		}
	}
	
	else{
		echo "<script>
		window.alert('Invalid User');
</script>";

}
	mysqli_close($con);
	?>
