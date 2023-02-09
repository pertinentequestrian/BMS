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
				$viewGO = mysql_query($view,$con) or die (mysql_error());
				if (mysql_num_rows($viewGO)>0)
				{
					echo "<center><header class='head'>
						<h2 style='font-family:Copperplate-Gothic; font-size:30px;'>Book Monitoring System</h2>
						<p style='font-family:Calibri;'>Home | 
						<a href=''>Books</a> | 
						<a href=''>Transaction History</a> |
						<a href=''>About</a></p>
					</header></center>
					<center><form name='BooksSearch' method='POST' action='Includes/subBookSearch&Update.php'>
						<table cellpadding='1' cellspacing='1' border='0'>
							<tr><td><b>Author: </b></td><td><input type='text' name='Author' size='20'></td></tr>
							<tr><td colspan='2' align='right'><input type='submit' name='submit' value='Search'><input type='reset' name='reset' value='Clear'></td>
							</tr>
						</table>
						<br/>
						<br/>
						<hr/>
						<table cellpadding='5' cellspacing='5' border='1'>
							<tr><td><h4>BID</h4></td><td><h4>Book Title</h4></td><td><h4>Author</h4></td><td><h4>Publisher</h4></td><td><h4>Year</h4></td>
							</tr>";
							if(isset($_POST['submit']))
							{
								$Author = $_POST['Author'];
								if( $Author== "")
								{
									echo "<tr><td colspan='5' align='center'> Author Left Blank!!!</td></tr>";
								}
								else
								{
									$view="select BID, BTitle, Author, Publisher, Year from books_information where Author like '%".$Author."%'";
									$viewGO = mysql_query($view,$con) or die (mysql_error());
									if(mysql_num_rows($viewGO)>0)
									{
										while($record=mysql_fetch_array($viewGO))
										{
											$bid = $record['BID'];
											echo"<tr><td>input type='checkbox' name='id[]' value='$bid'<td>".$record['BID']."</td><td>".$record['BTitle']."</td><td>".$record['Author']."</td> <td>".$record['Publisher']."</td> <td>".$record['Year']."</td></tr>";
										}
									}
									else
									{
										echo "<tr><td colspan='5' align='center'> No Record Found!!!</td></tr>";
									}
									echo "</table></center>
									<br>
									<hr>
									<br>
									<center><table class='bookdes' width='400'>
										<tr><td colspan='2'><center><h2>Changes</h2></center><br></td></tr>
										<tr><td><h4>Book Title</h4></td><td>: <input type='text' name='TitleBook' size='20'></td></tr>
										<tr><td><h4>Author</h4></td><td>: <input type='text' name='AuthorBook' size='20'></td></tr>
										<tr><td><h4>Publisher</h4></td><td>: <input type='text' name='PublisherBook' size='20'></td></tr>
										<tr><td colspan='2'><center><input type='submit' name='submit' value='Update'></center></td></tr>
									</table></center>";
								}
							}
						echo "</form></center>
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