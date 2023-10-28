<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Start or resume the session
session_start();

// Your authentication and authorization code goes here

// Example: If the user is not authenticated, redirect to the login page
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page
header("Location: login.php");
exit;
?>