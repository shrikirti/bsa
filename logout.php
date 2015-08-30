<?php  

session_start();

// remove all session variables
session_unset(); 
session_destroy();  
header("Location: LoggedOut.html");//use for the redirection to some page  
?>  