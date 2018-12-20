<?php
	// Start the session
	session_start();
	// remove all session variables
	session_unset();
	// destroy the session
	session_destroy();
	//redirecting to log in page
	header("Location: signin.php");
?>
