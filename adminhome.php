
<?php 

$f=$_POST['usernamee'];
$m=$_POST['passwordd'];
$servername = "localhost";
$username = "root";
$password = "";
$database="examination";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	

	die("error in connecting database".mysqli_connent_error());
}
$sql="select * from admin where username='$f' and password='$m'";
	mysqli_query($con,$sql);
	$retival=mysqli_query($con,$sql);
	if(mysqli_num_rows($retival)>0)
	{
	echo " <meta charset='UTF-8'>
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
					<a href='adminhome.html'>Home</a>
				</li>
				<li>
					<a href='adminquestion.php'>Question Feed</a>
				</li>
				<li>
					<a href='userprofiler.php'>Register User</a>
				</li>
				
				
			</ul>
		</div>
	</div>
	
	<h1 class='a'>Welcome to Online portal<h1>
</body>
</html>";
	}

	else{
		echo "<script>
		window.alert('Invalid User');
</script>";
 header("location:adminlogin.php");
}
	mysqli_close($con);
	?>