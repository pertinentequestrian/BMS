<?php
	include("Includes/connection.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Home</title>
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
						<p style='font-family:Calibri;'>Home | 
						<a href='BookSearch.php'>Books</a> | 
						<a href=''>Transaction History</a> |
						<a href=''>About</a></p>
					</header></center>
					<center><div class='Welcome'>
						<h3 style='font-size:50px;'><b>Welcome BCCT Students!</b></h3>
						<p><b>The Book Monitoring Student was made by a small group of grade 12 students.<br>This was made to have an easy tansaction between the student and the librarian.<br>This fix the need for librarians to buy notebooks to log every transactions</b></p>
					</div></center>
					<a href='BookSearch.php'>
						<div class='boxes'>
							<img class='img1' src='bookreading.jpg' height='100' width='300' align='right' >
							<h3 align='left'>Get Started!</h3>
							<p align='left'>Explore the library and read anything that the school has to offer!</p>
						</div>
					</a>
					<a href=''>
						<div class='boxes'>
							<img class='img2' src='transac.png' height='100' width='300' align='left'>
							<h3 align='right'>Already requested a book?</h3>
							<p align='right'>Visit your transaction history and see!</p>
						</div>
					</a>
					<a href=''>
						<div class='boxes'>
							<img class='img1' src='group.jpg' height='100' width='300' align='right'>
							<h3 align='left'>About Us</h3>
							<p align='left'>Get to know the people behind this project!</p>
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