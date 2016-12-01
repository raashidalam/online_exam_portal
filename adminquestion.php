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
<form action="quesfeedaction.php" method="post" align="center">
<table width="1000" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Question</td>
    <td><span id="sprytextfield1">
      <label for="txtquestion"></label>
	  
      <textarea name="txtquestion" id="txtquestion"></textarea>

  </tr>
  <tr>
    <td>option1</td>
    <td><span id="sprytextfield2">
      <label for="txtoption1"></label>
      <input type="text" name="txtoption1" id="txtoption1" />
     
  </tr>
  <tr>
    <td>option2</td>
    <td><span id="sprytextfield3">
      <label for="txtoption2"></label>
      <input type="text" name="txtoption2" id="txtoption2" />
    
  </tr>
  <tr>
    <td>option3</td>
    <td><span id="sprytextfield4">
      <label for="txtoption3"></label>
      <input type="text" name="txtoption3" id="txtoption3" />
    
  </tr>
  <tr>
    <td>option4</td>
    <td><span id="sprytextfield5">
      <label for="txtoption4"></label>
      <input type="text" name="txtoption4" id="txtoption4" />

  </tr>
  <tr>
    <td>Answer</td>
    <td><span id="sprytextfield6">
      <label for="txtanswer"></label>
      <input type="text" name="txtanswer" id="txtanswer" />
     
  </tr>
 
  <tr>
    <td>Category</td>
    <td><label for="Selectcat"></label>
      <select name="Selectcat" id="Selectcat">
       <option value='Databas'>database</option>
  	<option value='Compiler'>Compiler_Design</option>
  	<option value='Web_tech'>Web tech</option>
  	<option value='Data_structure'>Data structure</option>
	<option value=analog>Analog Electronic circuit</option>
  	<option value='signal'>signal syatem</option>
      </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" id="Submit" value="Submit" />   <input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>

</form>
</div><br />

    
     </div>
    </div>
  </div>
</div>

