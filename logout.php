<?php
// start session
session_start();

// unset the "username" session variable
$_SESSION['login'] = 0;

// redirect the user to the login page
header("Location: login.php");
exit();
?>
