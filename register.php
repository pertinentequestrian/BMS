<!DOCTYPE html>
<html>
	<head><title>Registration Form</title></head>
	<body>
		<center><table>
			<form name="RegistrationForm" action="Includes/subRegister.php" method="POST">
			<tr><td colspan="2"><h2>Registration Form</h2></td></tr>
			<tr><td colspan="2"><h3>Login Info</h3></td></tr>
			<tr><td>User ID:</td></tr> <tr><td><input type="text" name="UID" size="20"></td></tr>
			<tr><td>Username:</td></tr> <tr><td><input type="text" name="Usname" size="20"></td></tr>
			<tr><td>Password:</td></tr> <tr><td><input type="password" name="passw" size="20"></td></tr>
			<tr><td>Confirm Password:</td></tr> <tr><td><input type="password" name="confpassw" size="20"></td></tr>
			<tr><td colspan="2"><h3>Personal Info</h3></td></tr>
			<tr><td>Last Name:</td></tr> <tr><td><input type="text" name="Lname" size="20"></td></tr>
			<tr><td>First Name:</td></tr> <tr><td><input type="text" name="Fname" size="20"></td></tr>
			<tr><td>Middle Name:</td></tr> <tr><td><input type="text" name="Mname" size="20"></td></tr>
			<tr><td>User Description:</td></tr> <tr><td><input type="text" name="UDesc" size="20" placeholder="Student/Librarian"></td></tr>
			<tr><td colspan="2">
				<input type="submit" name="submit" value="Register">
				<input type="reset" name="reset" value="Reset">
			</td></tr>
			</form>
		</table></center>
	</body>
</html>