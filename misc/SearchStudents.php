<?php
	include("Includes/connection.php");
?>
<html>
	<head><title>Sample View Page</title></head>
	<body>
		<?php
			if (isset($_COOKIE['User']))
			{	
				$view = "select UserName, Password from Login where UserName='". $_COOKIE['User'] ."' ";
				$viewGO = mysql_query($view,$con) or die (mysql_error());
				if (mysql_num_rows($viewGO)>0)
				{
					echo "<form name='SFSearch' method='POST' action='#'>
						<table cellpadding='1' cellspacing='1' border='0'>
							<tr><td colspan='2'><h3>Student Information</h3></td></tr>
							<tr><td><b>Last Name: </b></td><td><input type='text' name='LastName' size='20'></td></tr>
							<tr><td colspan='2' align='right'><input type='submit' name='submit' value='Search'><input type='reset' name='reset' value='Clear'></td>
							</tr>
						</table>
						<br/>
						<br/>
						<hr/>
						<table cellpadding='5' cellspacing='5' border='1'>
							<tr><td><h4>User ID</h4></td><td><h4>User Name</h4></td><td><h4>Last Name</h4></td><td><h4>First Name</h4></td>
							<td><h4>Middle Name</h4></td></tr>";
							if(isset($_POST['submit']))
							{
								$LastName = $_POST['LastName'];
								if( $LastName== "")
								{
									echo "<tr><td colspan='5' align='center'> Last Name Left Blank!!!</td></tr>";
								}
								else
								{
									$view="select a.LgID,a.Username,b.SLname,b.SFname,b.SMname from Login a, Students b where a.LgID=b.SID and b.SLname like '%".$LastName."%'";
									$viewGO = mysql_query($view,$con) or die (mysql_error());
									if(mysql_num_rows($viewGO)>0)
									{
										while($record=mysql_fetch_array($viewGO))
										{
											$sid = $record['SID'];
											echo"<tr><td>".$record['SID']."</td><td>".$record['Username']."</td><td>".$record['SLname']."</td> <td>".$record['SFname']."</td> <td>".$record['SMname']."</td></tr>";
										}
									}
									else
									{
										echo "<tr><td colspan='5' align='center'> No Record Found!!!</td></tr>";
									}
								}
							}
				}
			}
			else
			{
				echo "<table width=’1000’ border=’1’ cellspacing=’2’ cellpadding=’2’ align=’center’>
				<tr><td align=center><strong><span class= style10>Restricted Page! You are not a Valid User....</span><strong></td></tr>
				</table>";
				?> <script src="js/login.js" type="text/javascript" language="javascript"></script>
					<body onload='setInterval("initRedirect0()",2000)'></body>
				<?php
			}
		?>
				</table>
			</form>
	</body>
</html>