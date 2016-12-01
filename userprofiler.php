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
	
	<h1 class="a">Welcome to Online portal<h1>
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
  $name = "";
      $userid= "";
      $sql = "select  userid, name from registration ";
      $res = mysqli_query($con,$sql);
      
  ?>
  <form action="userprofiler.php" method="post">
  <table width="360"  align="center" border="0" background:color="red" style="border:#999 1px solid; text-align:center ">
  <tr>
  <th style="background-color:#CCC">
  Username
  </th>
  <th style="background-color:#CCC">
  Show Profile
  </th  >
   </th>
  <th style="background-color:#CCC">
  Delete user profile
  </th  >
   <th style="background-color:#CCC">
 Show User Profile
  </th  >
  
  </tr>
  <tr>
  <?php while($row = mysqli_fetch_array($res))
      {
          $name = $row["name"];
          $userid = $row["userid"];
		 // $id = $row["rollno"];
  
  echo "<td style='background-color:#09F'>$userid</td><td style='background-color:#09F'><a href='adminuserprofile.php?var1=$userid'>Show user profile</a></td><td style='background-color:#09F'><a href='delete.php?var1=$userid'>delete user</a></td><td style='background-color:#09F'><a href='showmarks.php?var1=$userid'>Show marks</a></td>";
  echo"</tr>";
      }
  ?>
  
  </table>
  
  </form>
      
       </div>
     </div>
     </div>
     </div></div>
     