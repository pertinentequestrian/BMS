<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<div id="table"><center><table>
			<form name="LoginForm" action="subLogin.php" method="POST">
				<tr><td colspan="2"><center><b>BMS BCCT</b></center><br></td></tr>
				<tr><td>Username </td><td>: <input type="text" name="User" size="20"></td></tr>
				<tr><td>Password </td><td>: <input type="password" name="Password" size="20"></td></tr>
				<tr><td>Occupation </td><td>: <input type="text" name="Occupation" size="20" placeholder="Student/Librarian"></td></tr>
				<tr><td colspan="2"><br><center><a href="register.php">Not registered? Sign up now!</a></center></td></tr>
				<tr><td colspan="2"><center>
					<br><input type="submit" name="submit" value="Login">
					<input type="reset" name="reset" value="Cancel">
				</center></td></tr>
			</form>
		</table></center></div>
	</body>
</html>