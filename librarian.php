<?php
	include("Includes/connection.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Librarian Home</title>
		<link rel="stylesheet" type="text/css" href="css/student.css">
	</head>
	<body>
		<?php
			if(isset($_COOKIE['User']))
			{
				$view = "select Username, Password from Login where Username='". $_COOKIE['User'] ."' ";
				$viewGO = mysqli_query($con,$view) or die (mysqli_error());
				if (mysqli_num_rows($viewGO)>0)
				{
					echo "<center><header class='head'>
						<h2 style='font-family:Copperplate-Gothic; font-size:30px;'>Book Monitoring System</h2>
						<p>Welcome ".$_COOKIE['User']."
						<p style='font-family:Calibri;'>Home | 
						<a href=''>Books</a> | 
						<a href=''>Transaction History</a> | 
						<a href=''>Edit Students</a>| 
						<a href=''>About</a></p>
					</header></center>
					<a href='http://google.com'>
						<div class='boxes'>
							<img class='img1' src='books.jpg' height='100' width='300' align='right' >
							<h3 align='left'>Books</h3>
							<p align='left'>Add or Delete books from the Book List</p>
						</div>
					</a>
					<a href=''>
						<div class='boxes'>
							<img class='img2' src='transac.png' height='100' width='300' align='left'>
							<h3 align='right'>Transaction Logs</h3>
							<p align='right'>All the pending requests and transaction logs</p>
						</div>
					</a>
					<a href=''>
						<div class='boxes'>
							<img class='img1' src='group.jpg' height='100' width='300' align='right' >
							<h3 align='left'>Credits</h3>
							<p align='left'>People who are responsible for this project</p>
						</div>
					</a>
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
			}
		?>
	</body>
</html>