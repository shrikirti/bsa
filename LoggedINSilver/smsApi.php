<!DOCTYPE HTML>
<?php 
session_start();
      if($_SESSION['logged_in']!="true"){
		header("Location: ../LoggedOut.html");
	}		
/*	
	// create a new cURL resource
	$ch = curl_init();

	$urlString = "http://api.clickatell.com/http/sendmsg?user=shrikirti&password=ispQnEjJ&api_id=3560436&to=91".$_SESSION['mobile']."&text=Message";

	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $urlString);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);
*/	
	echo "<script>window.open ('otp.php', '_self'); </script>";
?>
