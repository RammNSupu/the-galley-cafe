<?php
session_start(); // Start the session

// Destroy all session variables
$_SESSION = array();

// Destroy the session itself
session_destroy();

// Redirect to the homepage or login page after logout
header("Location: index.php"); // Redirect to homepage or login page
exit();
?>
