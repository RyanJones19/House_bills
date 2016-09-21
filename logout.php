<?php
// Init session
session_start();
// Delete current session
unset($_SESSION['username']);
// Jump to login page
header('Location: index.php'); 
// It’ll take us back, logged out
?>
