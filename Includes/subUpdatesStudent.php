<?php
	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		$LastName = $_POST['LastName'];
		$FirstName = $_POST['FirstName'];
		$MiddleName = $_POST['MiddleName'];
		
		if(!empty($_POST['id']))
		{
			if($LastName == ""||$FirstName == "" ||$MiddleName == "")
			{
				echo "No changes were made";
			}
			else
			{
				foreach($_POST['id'] as $sid)
				{
					$size = count($sid);
					for($i=0;$i<$size;$i++)
					{
						$chk = "select * from students";
						$go = mysql_query($chk,$con) or die (mysql_error());
						if(mysql_num_rows($go)>0)
						{
							$change = "update students set SLname='".$LastName."', SFname ='".$FirstName."',SMname='".$MiddleName."' where SID='".$sid[$i]."'";
							$changeGo = mysql_query($change, $con) or die (mysql_error());
							echo "Record Successfully Updated...";
						}
					}
				}
			}
		}
		else 
		{
			
		}
	}
?>