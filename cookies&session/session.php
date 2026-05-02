

<?php
// Session :
// A session stores data on the server, not browser.

// 1. More secure than cookies, Stored in server → more secure, No size limit (depends on server), Must use session_start() in every page
// 2. Used for login systems
// 3. Data stored until browser is closed or session destroyed.


session_start();

// Setting session
$_SESSION['user'] = "Mithra";

// Accessing session
echo "Welcome " . $_SESSION['user'];

?>

