<?php
	include ("Includes/connection.php");
	if(isset($_POST['Submit']))
	{

		$Subject_Description = $_POST['Subjectdesc'];
			$sql = "INSERT INTO subjecttable(SubjectDesc) VALUES ('".$Subject_Description."')";
			$result=mysql_query($sql,$con) or die (mysql_error());
				echo '<script type="text/javascript">
							alert("New Subject Added!");
							location="addSubjectHome.php";
						</script>';
	}
	else
	{
		echo 'not inserted';
	}
?>