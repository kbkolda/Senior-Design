<?php

$servername = "localhost";
$username = "peacebr2_user";
$password = "dbuser";
$dbname = "peacebr2_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$type = $_POST['type'];

if($type == 'staffheader')
{
	$sql = "UPDATE sidebar SET staffheader='$_POST[post_header_staff]'";
	$conn->query($sql);
	$sql = "UPDATE sidebar SET staffbody='$_POST[post_body_staff]'";
}
if($type == 'userheader')
{
	$sql = "UPDATE sidebar SET userheader='$_POST[post_header_user]'";
	$conn->query($sql);
	$sql = "UPDATE sidebar SET userbody='$_POST[post_body_user]'";
}

if ($conn->query($sql) === TRUE) {
    $conn->close();

header("Location: http://peacebrookingscalendar.org/admin/sidebar.php");
}


?>