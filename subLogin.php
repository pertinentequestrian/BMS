<?php	
	setcookie("User",$_POST['User'],time()+3600);
	include("Includes/connection.php");
	
	if(isset($_POST ["submit"]))
	{
		$user=mysqli_real_escape_string($con, $_POST['User']);
		$pwd=mysqli_real_escape_string($con, $_POST['Password']);
		$occ=mysqli_real_escape_string($con, $_POST['Occupation']);
		
		$log="select a.*, b.* from login a, User b where a.Username='".$user."' and a.Password='".$pwd."' and b.Occupation='".$occ."' and a.UID=b.Occupation";
		$rs=mysqli_query($con, $log) or die (mysqli_error($con));
		
		if($occ=="Librarian")
		{
			if(mysqli_num_rows($rs)>0)
			{
				while($rec=mysqli_fetch_array($rs))
				{
					echo 'SUCCESS!!! ';
					echo 'NOW REDIRECTING TO LIBRARIAN HOME PAGE';
					?> <script src="scripts/lib.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
				}
			}
			else
			{
				echo 'Error: Wrong credentials. Please try again.';
				?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
			}
		}
		else if($occ=="Student")
		{
			if(mysqli_num_rows($rs)>0)
			{
				while($rec=mysqli_fetch_array($rs))
				{
					echo 'SUCCESS!!! ';
					echo 'NOW REDIRECTING TO STUDENT HOME PAGE';
					?> <script src="scripts/stu.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
				}
			}
			else
			{
				echo 'Error: Wrong credentials. Please try again.';
				?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
							<body onload='setInterval("initRedirect0()",2000)'></body>
						<?php
			}
		}
		else
		{
			echo 'Error: Wrong credentials. Please try again.';
			?> <script src="scripts/log.js" type="text/javascript" language="javascript"></script>
						<body onload='setInterval("initRedirect0()",2000)'></body>
					<?php
		}
	}
?>