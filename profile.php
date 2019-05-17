<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" />
<title>Your Home Page</title>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $_SESSION['username']; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>