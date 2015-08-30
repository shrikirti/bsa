<html>
<?php
include ('common.inc.php');


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connection successful";
					
	//create user table:
	$sql = "CREATE TABLE ".$table_prefix."User(iqamaId int(5) PRIMARY KEY, username varchar(30), password varchar (50), name varchar (30), mobile bigint(20), email varchar(30), address varchar(100), usertype varchar (50))";		
	if (mysqli_query($conn,$sql)) {		
		echo "User table created successfully";	
		
		//create default event table:
		//$sql = "CREATE TABLE ".$table_prefix."Event(ID varchar(30), name varchar (30), description varchar(100), type varchar (30), level varchar(50), date varchar(20), venue varchar(50), isOrganizer varchar (5))";		
		//if (mysqli_query($conn,$sql)) {		
			//echo "User table created successfully";	
		//}else{
			//die("Error creating table: ".mysqli_error($conn));
		//}
	}else{
		die("Error creating table: ".mysqli_error($conn));
	}
}

	


mysqli_close($conn);
?>

<head>
	<title> Admin Login </title>
	<link rel="stylesheet" type="text/css" href="../FrontEnd/css/mystyle.css">
</head>

<body>		
		<table id  = "header" width = "1300" align = "center">		
			<tr>
				<td>
					<img src = "../FrontEnd/images/EaseEventsLogo.png">
				</td>
				<td colspan = "10">
					&nbsp;
				</td>
				<td align = "center">
					<a href = "../FrontEnd/SignUp.php">Sign Up </a>
				</td>
				<td align = "center">
					<a href = "../FrontEnd/Login.php"> Login</a>
				</td>
			</tr>		
		</table>
		
	<h2 align = "center"> Thank you, Admin! </h2>
	<p> Your tables are created the database successfully. </p>
</body>

</html>