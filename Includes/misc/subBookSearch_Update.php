<?php
	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		$BTitle = $_POST['TitleBook'];
		$BAuthor = $_POST['AuthorBook'];
		$BPublisher = $_POST['PublisherBook'];
		
		if(!empty($_POST['id']))
		{
			if($BTitle == ""||$BAuthor == "" ||$BPublisher == "")
			{
				echo "No changes were made";
			}
			else
			{
				foreach($_POST['id'] as $bid)
				{
					$size = count($bid);
					for($i=0;$i<$size;$i++)
					{
						$chk = "select * from books_information";
						$go = mysql_query($chk,$con) or die (mysql_error());
						if(mysql_num_rows($go)>0)
						{
							$change = "update books_information set BTitle='".$BTitle."', Author ='".$BAuthor."',Publisher='".$BPublisher."' where BID='".$bid[$i]."'";
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