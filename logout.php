





<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: Home.html"); // Redirecting To Home Page
}
?>
