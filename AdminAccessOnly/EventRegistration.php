<html>
<?php
include ('common.inc.php');

$name=ucfirst(strtolower($_POST['name']));
$description=ucfirst(strtolower($_POST['description']));
$Type=ucfirst(strtolower($_POST['Type']));
$Level=ucfirst(strtolower($_POST['Level']));
$date = $_POST['date'];
$venue=ucfirst(strtolower($_POST['venue']));
$OrganizerNeeded = $_POST['OrganizerNeeded'];
		
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connection successful";
	$sql = "INSERT INTO Event ( ID, name, description, type, level, date, venue, isOrganizer) VALUES ('1','".$name."','".$description."','".$Type."','".$Level."','".$date."','".$venue."','".$OrganizerNeeded."')";		
	if (mysqli_query($conn,$sql)) {		
		echo "Event table value inserted successfully";	
		echo "<script>window.open('../loggedIn/EventRegistration.php','_self')</script>";
	}else{
		die("Error adding value into table: ".mysqli_error($conn));
	}
}		
?>

</html>