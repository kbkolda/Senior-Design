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


	//$sql = "UPDATE calendar SET jan='$_POST[post_date]' WHERE notification='not1'";
$type = $_POST['type'];
$month = $_POST['month'];
if($type == 'not1')
{
	switch($month)
	{
		case "jan":
			$sql = "UPDATE calendar SET jan='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "feb";
			$sql = "UPDATE calendar SET feb='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "mar";
			$sql = "UPDATE calendar SET mar='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "apr";
			$sql = "UPDATE calendar SET apr='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "may";
			$sql = "UPDATE calendar SET may='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "jun";
			$sql = "UPDATE calendar SET jun='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "jul";
			$sql = "UPDATE calendar SET jul='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "aug";
			$sql = "UPDATE calendar SET aug='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "sep";
			$sql = "UPDATE calendar SET sep='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "oct";
			$sql = "UPDATE calendar SET oct='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "nov";
			$sql = "UPDATE calendar SET nov='$_POST[post_date]' WHERE notification='not1'";	
			break;
		case "dbr";
			$sql = "UPDATE calendar SET dbr='$_POST[post_date]' WHERE notification='not1'";	
			break;
	}	
}

if($type == 'not2')
{
	switch($month)
	{
		case "jan":
			$sql = "UPDATE calendar SET jan='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "feb";
			$sql = "UPDATE calendar SET feb='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "mar";
			$sql = "UPDATE calendar SET mar='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "apr";
			$sql = "UPDATE calendar SET apr='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "may";
			$sql = "UPDATE calendar SET may='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "jun";
			$sql = "UPDATE calendar SET jun='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "jul";
			$sql = "UPDATE calendar SET jul='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "aug";
			$sql = "UPDATE calendar SET aug='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "sep";
			$sql = "UPDATE calendar SET sep='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "oct";
			$sql = "UPDATE calendar SET oct='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "nov";
			$sql = "UPDATE calendar SET nov='$_POST[post_date]' WHERE notification='not2'";	
			break;
		case "dbr";
			$sql = "UPDATE calendar SET dbr='$_POST[post_date]' WHERE notification='not2'";	
			break;
	}
}
if($type == 'first')
{
	switch($month)
	{
		case "jan":
			$sql = "UPDATE calendar SET jan='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "feb";
			$sql = "UPDATE calendar SET feb='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "mar";
			$sql = "UPDATE calendar SET mar='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "apr";
			$sql = "UPDATE calendar SET apr='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "may";
			$sql = "UPDATE calendar SET may='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "jun";
			$sql = "UPDATE calendar SET jun='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "jul";
			$sql = "UPDATE calendar SET jul='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "aug";
			$sql = "UPDATE calendar SET aug='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "sep";
			$sql = "UPDATE calendar SET sep='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "oct";
			$sql = "UPDATE calendar SET oct='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "nov";
			$sql = "UPDATE calendar SET nov='$_POST[post_date]' WHERE notification='first'";	
			break;
		case "dbr";
			$sql = "UPDATE calendar SET dbr='$_POST[post_date]' WHERE notification='first'";	
			break;
	}
}
if($type == 'last')
{
	switch($month)
	{
		case "jan":
			$sql = "UPDATE calendar SET jan='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "feb";
			$sql = "UPDATE calendar SET feb='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "mar";
			$sql = "UPDATE calendar SET mar='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "apr";
			$sql = "UPDATE calendar SET apr='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "may";
			$sql = "UPDATE calendar SET may='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "jun";
			$sql = "UPDATE calendar SET jun='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "jul";
			$sql = "UPDATE calendar SET jul='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "aug";
			$sql = "UPDATE calendar SET aug='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "sep";
			$sql = "UPDATE calendar SET sep='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "oct";
			$sql = "UPDATE calendar SET oct='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "nov";
			$sql = "UPDATE calendar SET nov='$_POST[post_date]' WHERE notification='last'";	
			break;
		case "dbr";
			$sql = "UPDATE calendar SET dbr='$_POST[post_date]' WHERE notification='last'";	
			break;
		default:
	}
}
if($type == 'due')
{
	switch($month)
	{
		case "jan":
			$sql = "UPDATE calendar SET jan='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "feb";
			$sql = "UPDATE calendar SET feb='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "mar";
			$sql = "UPDATE calendar SET mar='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "apr";
			$sql = "UPDATE calendar SET apr='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "may";
			$sql = "UPDATE calendar SET may='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "jun";
			$sql = "UPDATE calendar SET jun='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "jul";
			$sql = "UPDATE calendar SET jul='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "aug";
			$sql = "UPDATE calendar SET aug='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "sep";
			$sql = "UPDATE calendar SET sep='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "oct";
			$sql = "UPDATE calendar SET oct='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "nov";
			$sql = "UPDATE calendar SET nov='$_POST[post_date]' WHERE notification='due'";	
			break;
		case "dbr";
			$sql = "UPDATE calendar SET dbr='$_POST[post_date]' WHERE notification='due'";	
			break;
	}
}
if($type == 'email')
{
	$sql = "UPDATE email SET email='$_POST[post_email]'";
}

if($type == 'header')
{
	$sql = "UPDATE email SET header='$_POST[post_header]'";
	$conn->query($sql);
	$sql = "UPDATE email SET body='$_POST[post_body]'";
}

if ($conn->query($sql) === TRUE) {
    $conn->close();

header("Location: http://peacebrookingscalendar.org/admin/notifications.php");
}


?>