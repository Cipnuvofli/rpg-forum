<?php
/*This is the logout Script. It ends the PHP session and redirects the user to the home page */
session_start();
unset($_SESSION['name']);
session_destroy();
header("Location: Home.php");
?>