<html>
<?php
include ('common.inc.php');

$username=$_POST['username'];
$password=md5($_POST['password']);

$incorrectCounter='0';
		
		
		
		
// Check connection
if (!$conn) {
	echo "<script>message('Fatal Error! Please try again some other time. We are sorry :( ')</script>";
	die("Connection failed: " . mysqli_connect_error());
	echo "<script>window.open('../index.html','_self')</script>";
}else{
	$query="SELECT * FROM ".$table_prefix."User";
	$result=mysqli_query($conn,$query);
	// Associative array
	$arr=mysqli_fetch_all($result);
	
	if (mysqli_query($conn,$query)) {		
		for($i=0; $i < count($arr); $i++){
			$row = $arr[$i];
			if($username == $row[1]){
				if($password == $row[2]){
									
					if ($incorrectCounter<1){					
						echo "<script> var window.opener.name = openerWindow; </script>";
					}
					session_start();
					// Store Session Data
					$_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
					$_SESSION['password']= $password;  // Initializing Session with value of PHP Variable
					
					$_SESSION['iqamaId']= $row[0];  // Initializing Session with value of PHP Variable
					$_SESSION['name']= $row[3];  // Initializing Session with value of PHP Variable
					$_SESSION['mobile']= $row[4];  // Initializing Session with value of PHP Variable
					$_SESSION['email']= $row[5];  // Initializing Session with value of PHP Variable
					$_SESSION['address']= $row[6];  // Initializing Session with value of PHP Variable					
					$_SESSION['usertype']= $row[7];  // Initializing Session with value of PHP Variable
					
					$_SESSION['logged_in']="true";
					if($_SESSION['usertype'] == "Gold Individual"){
						echo "<script>window.open ('../GoldLogin/summary.php', '_self'); </script>";
						break;
					}else{
					
						echo "<script>window.opener.location = '../LoggedINSilver/index.php'; window.close();</script>";
						break;
					}
					
					
				}else{
					$incorrectCounter++;
					echo "<script>alert('Incorrect password!')</script>";
					echo "<script>window.open('../p_login.html','_self')</script>";
				}
			}else{
				if($i == (count($arr)-1)){
					$incorrectCounter++;
					echo "<script>alert('Username does not exists!')</script>";
					echo "<script>window.open('../p_login.html','_self')</script>";
				}
			}
		}

	}else{
		die("Error retrieving : ".mysqli_error($conn));
	}
}		
?>


</html>