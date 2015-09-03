<html>
<?php
include ('common.inc.php');

session_start();
      if($_SESSION['logged_in']!="true"){
		header("Location: ../LoggedOut.html");
	}

$iqamaId=$_SESSION['iqamaId'];
$username=$_SESSION['login_user'];
$password=$_SESSION['password'];
//$name=$_SESSION['name'];
//$mobile=$_SESSION['mobile'];
//$email = $_SESSION['email'];
//$address=$_SESSION['address'];
$usertype = 'Gold Individual';
		
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connection successful";
	$sql = "UPDATE ".$table_prefix."User SET usertype = '".$usertype."' WHERE iqamaId = '".$iqamaId."'";		
	if (mysqli_query($conn,$sql)) {		
		echo "Value updated successfully, id=".$_SESSION['logged_in']."";	
		echo "<script>window.open('../LoggedINSilver/requestReceived.php','_self')</script>";
	}else{
		die("Error adding value into table: ".mysqli_error($conn));
		//echo "<script>window.open('../index.html','_self')</script>";
	}
}		
?>
	
</html>