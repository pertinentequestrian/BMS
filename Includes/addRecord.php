<?php
		include("connection.php");
?>
<?php
	$tblLogin1 = "insert into Login(LgID, Username, Password, UID) values('19-TVL1-017', 'Nachon', '1234',1)";
	$LR1 = mysqli_query($tblLogin1, $con) or die(mysql_error());
	$tblLogin2 = "insert into Login(LgID, Username, Password, UID) values('19-TVL1-018', 'Andaya', '4231',1)";
	$LR2 = mysqli_query($tblLogin2, $con) or die(mysql_error());
	$tblLogin3 = "insert into Login(LgID, Username, Password, UID) values('19-TVL1-019', 'Cabig', '4321',1)";
	$LR3 = mysqli_query($tblLogin3, $con) or die(mysql_error());
	$tblLogin4 = "insert into Login(LgID, Username, Password, UID) values('19-LIB-003', 'Galicia', '1324',2)";
	$LR4 = mysqli_query($tblLogin4, $con) or die(mysql_error());
	$tblLogin5 = "insert into Login(LgID, Username, Password, UID) values('19-LIB-004', 'Mariano', '1432',2)";
	$LR5 = mysql_query($tblLogin5, $con) or die(mysql_error());
	$tblLogin6 = "insert into Login(LgID, Username, Password, UID) values('19-LIB-005', 'Javier', '2134',2)";
	$LR6 = mysql_query($tblLogin6, $con) or die(mysql_error());
	
	$tblUser1 = "insert into User(UID, Occupation) values(1,'Student')";
	$OR1 = mysql_query($tblUser1, $con) or die(mysql_error());
	$tblUser2 = "insert into User(UID, Occupation) values(2,'Librarian')";
	$OR2 = mysql_query($tblUser2, $con) or die(mysql_error());
	
	$grade1 = "insert into Level(LvlID, LevelDesc) values('E', '11')";
	$GR1 = mysql_query($grade1, $con) or die(mysql_error());
	$grade2 = "insert into Level(LvlID, LevelDesc) values('T', '12')";
	$GR2 = mysql_query($grade2, $con) or die(mysql_error());
	
	$section1 = "insert into Section(SectID, SectDesc) values('E1', 'Almaciga')";
	$Sect1 = mysql_query($section1, $con) or die(mysql_error());
	$section2 = "insert into Section(SectID, SectDesc) values('E2', 'Ardisia')";
	$Sect2 = mysql_query($section2, $con) or die(mysql_error());
	$section3 = "insert into Section(SectID, SectDesc) values('E3', 'Banuyo')";
	$Sect3 = mysql_query($section3, $con) or die(mysql_error());
	$section4 = "insert into Section(SectID, SectDesc) values('E4', 'Cerbera')";
	$Sect4 = mysql_query($section4, $con) or die(mysql_error());
	$section5 = "insert into Section(SectID, SectDesc) values('E5', 'Kayumanis')";
	$Sect5 = mysql_query($section5, $con) or die(mysql_error());
	$section6 = "insert into Section(SectID, SectDesc) values('E6', 'Balayong')";
	$Sect6 = mysql_query($section6, $con) or die(mysql_error());
	$section7 = "insert into Section(SectID, SectDesc) values('E7', 'Lanite')";
	$Sect7 = mysql_query($section7, $con) or die(mysql_error());
	$section8 = "insert into Section(SectID, SectDesc) values('E8', 'Kalantas')";
	$Sect8 = mysql_query($section8, $con) or die(mysql_error());
	$section9 = "insert into Section(SectID, SectDesc) values('E9', 'Maritima')";
	$Sect9 = mysql_query($section9, $con) or die(mysql_error());
	$section10 = "insert into Section(SectID, SectDesc) values('T1', 'Puraw')";
	$Sect10 = mysql_query($section10, $con) or die(mysql_error());
	$section11 = "insert into Section(SectID, SectDesc) values('T2', 'Garing')";
	$Sect11 = mysql_query($section11, $con) or die(mysql_error());
	$section12 = "insert into Section(SectID, SectDesc) values('T3', 'Mabaya')";
	$Sect12 = mysql_query($section12, $con) or die(mysql_error());
	$section13 = "insert into Section(SectID, SectDesc) values('T4', 'Kahel')";
	$Sect13 = mysql_query($section13, $con) or die(mysql_error());
	$section14 = "insert into Section(SectID, SectDesc) values('T5', 'Kalimbahin')";
	$Sect14 = mysql_query($section14, $con) or die(mysql_error());
	$section15 = "insert into Section(SectID, SectDesc) values('T6', 'Morado')";
	$Sect15 = mysql_query($section15, $con) or die(mysql_error());
	$section16 = "insert into Section(SectID, SectDesc) values('T7', 'Malamaya')";
	$Sect16 = mysql_query($section16, $con) or die(mysql_error());
	$section17 = "insert into Section(SectID, SectDesc) values('T8', 'Lungti')";
	$Sect17 = mysql_query($section17, $con) or die(mysql_error());
	$section18 = "insert into Section(SectID, SectDesc) values('T9', 'Kunig')";
	$Sect18 = mysql_query($section18, $con) or die(mysql_error());
	
	$stbl1 = "insert into Students(SFname,SMname,SLname,SID) values('Rowel','Abion','Nachon','19-TVL1-017')";
	$Stu1 = mysql_query($stbl1, $con) or die(mysql_error());
	$stbl2 = "insert into Students(SFname,SMname,SLname,SID) values('Ern Leynell','Mercado','Andaya','19-TVL1-018')";
	$Stu2 = mysql_query($stbl2, $con) or die(mysql_error());
	$stbl3 = "insert into Students(SFname,SMname,SLname,SID) values('John Mark','Garcia','Cabig','19-TVL1-019')";
	$Stu3 = mysql_query($stbl3, $con) or die(mysql_error());
	
	$ltbl1 = "insert into Librarian(LFname,LMname,LLname,LID) values('Noryvie','Bernard','Galicia','19-LIB-003')";
	$Lib1 = mysql_query($ltbl1, $con) or die(mysql_error());
	$ltbl2 = "insert into Librarian(LFname,LMname,LLname,LID) values('Glen','Mabaquiao','Mariano','19-LIB-004')";
	$Lib2 = mysql_query($ltbl2, $con) or die(mysql_error());
	$ltbl3 = "insert into Librarian(LFname,LMname,LLname,LID) values('Janille','Johnson','Javier','19-LIB-005')";
	$Lib3 = mysql_query($ltbl3, $con) or die(mysql_error());
	
	$book1 = "insert into Books_Information(BID, BTitle, Author, Publisher, Year) values('Fict-01', 'Leave the World Behind', 'Rumaam Alam', 'Ecco Press', '2020')";
	$B1 = mysql_query ($book1, $con) or die(mysql_error());
	$book2 = "insert into Books_Information(BID, BTitle, Author, Publisher, Year) values('Fict-02', 'On Earth We are Briefly Gorgeous', 'Ocean Vuong', 'Penguin Group', '2019')";
	$B2 = mysql_query ($book2, $con) or die(mysql_error());
	$book3 = "insert into Books_Information(BID, BTitle, Author, Publisher, Year) values('Fict-03', 'Everything I Never Told You', 'Celeste Ng', 'Penguin Group', '2014')";
	$B3 = mysql_query ($book3, $con) or die(mysql_error());
?>