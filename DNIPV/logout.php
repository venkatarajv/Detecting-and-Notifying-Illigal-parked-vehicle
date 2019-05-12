<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['Vehicle_NO']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: login.php');

?>