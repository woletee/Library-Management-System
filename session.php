
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root", "");
// Selecting Database

$db = mysqli_select_db($conn,"lmsdb");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn,"select username from login where username='$user_check'",);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: indexxx.php'); // Redirecting To Home Page
}
?>
