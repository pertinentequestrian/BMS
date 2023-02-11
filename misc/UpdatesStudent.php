<?php
	include("Includes/connection.php");
?>
<html>
	<head>
		<title>Edit Students</title>
		<link rel="stylesheet" type="text/css" href="css/updatesstudent.css">
	</head>
	<body>
		<?php
			if(isset($_COOKIE['User']))
			{
				$view = "select UserName, Password from Login where UserName='". $_COOKIE['User'] ."' ";
				$viewGO = mysql_query($view,$con) or die (mysql_error());
				if (mysql_num_rows($viewGO)>0)
				{
					echo "<center><header class='head'>
						<h2 style='font-family:Copperplate-Gothic; font-size:30px;'>Book Monitoring System</h2>
						<p style='font-family:Calibri;'><a href=''>Home</a>| 
						<a href=''>Books</a> | 
						<a href=''>Transaction History</a> | 
						Edit Students |
						<a href=''>About</a></p>
					</header></center>
					<br>
					<div id='inside'><form name='SFView' method='POST' action='Includes/subUpdatesStudent.php'>
						<center><table class='tabdes' width='400'>
							<tr><td colspan='4'><center><h2>Student Information</h2></center></td></tr>
							<tr><td><h4>Select</h4></td><td><h4>Last Name</h4></td><td><h4>First Name</h4></td><td><h4>Middle Name</h4></td></tr>";
								$view="select * from students";
								$viewGO = mysql_query($view, $con) or die (mysql_error());
								if(mysql_num_rows($viewGO)>0)
								{
									while($record=mysql_fetch_array($viewGO))
									{
										$sid = $record['SID'];
										echo "<tr><td><input type='checkbox' name='id[]' value='$sid'></td><td>".$record['SLname']."</td><td>".$record['SFname']."</td><td>".$record['SMname']."</td></tr>";
									}
								}
						echo "</table></center>
						<br>
						<hr>
						<br>
						<center><table class='tabdes' width='400'>
							<tr><td colspan='2'><center><h2>Changes</h2></center><br></td></tr>
							<tr><td><h4>Last Name</h4></td><td>: <input type='text' name='LastName' size='20'></td></tr>
							<tr><td><h4>First Name</h4></td><td>: <input type='text' name='FirstName' size='20'></td></tr>
							<tr><td><h4>Middle Name</h4></td><td>: <input type='text' name='MiddleName' size='20'></td></tr>
							<tr><td colspan='2'><center><input type='submit' name='submit' value='Update'></center></td></tr>
						</table></center>
					</form></div>
					<br>
					<footer>
						<center><p>A Project for Web Design and Capstone<br>Records and Logs: An Easy Access for Students and Librarians of Bulacan College of Commerce and Trade Inc. © 2021 Bulacan College of Commerce and Trade Inc.</p></center>
					</footer>";
				}
			}
			else
			{
				echo "<table width=1000 border=1 cellspacing=2 cellpadding=2 align=center>
				<tr><td align=center><strong><span class= style10>Restricted Page! You are not a Valid User....</span><strong></td></tr>
				</table>";
				?> <script src="scripts/login.js" type="text/javascript" language="javascript"></script>
					<body onload='setInterval("initRedirect0()",2000)'></body>
				<?php
			}
		?>
	</body>
</html>