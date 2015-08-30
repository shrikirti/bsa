<html>
<?php
include ('common.inc.php');

$iqamaId=$_POST['iqama'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email = $_POST['email'];
$address=$_POST['address'];
$usertype = 'Silver Individual';
		
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connection successful";
	$sql = "INSERT INTO ".$table_prefix."User (iqamaId, username, password, name, mobile, email, address, usertype) VALUES ('".$iqamaId."','".$username."','".$password."','".$name."','".$mobile."','".$email."','".$address."','".$usertype."')";		
	if (mysqli_query($conn,$sql)) {		
		echo "Event table value inserted successfully";	
		echo "<script>window.open('../plogin.html','_self')</script>";
	}else{
		die("Error adding value into table: ".mysqli_error($conn));
		echo "<script>window.open('../index.html','_self')</script>";
	}
}		
?>
	
</html>