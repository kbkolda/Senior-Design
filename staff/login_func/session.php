<?php

$host="localhost"; // Host name 
$username="peacebr2_user"; // Mysql username 
$password="dbuser"; // Mysql password 
$db_name="peacebr2_db"; // Database name 
$tbl_name="user"; // Table name 

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("$host", "$username", "$password",$db_name)or die("cannot connect"); 
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];
// SQL Query To Fetch Complete Information Of User


$sql="SELECT username FROM staff WHERE username='$user_check'";

$ses_sql=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session)){
mysql_close($conn); // Closing Connection
header('Location: login'); // Redirecting To Home Page
exit();
}

?>