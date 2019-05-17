<!DOCTYPE html>
<?php
include 'header.html';
include('./login_func/session.php');
require_once('bdd.php');
session_start();


$servername = "localhost";
$username = "peacebr2_user";
$password = "dbuser";
$dbname = "peacebr2_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT staffheader FROM sidebar";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$staffheader = $row["staffheader"];

$sql = "SELECT staffbody FROM sidebar";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$staffbody = $row["staffbody"];

$sql = "SELECT userheader FROM sidebar";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$userheader = $row["userheader"];

$sql = "SELECT userbody FROM sidebar";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$userbody = $row["userbody"];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type="text/javascript" src="/js/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="css/jquery.timepicker.min.css">
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="css/fullcalendar.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">
    <link href="css/fullcalendar.print.min.css" rel="stylesheet" media="print">
    <link href="css/fullcalendar.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<style>

/* Create two equal columns that floats next to each other */
.column {
  text-align: center;
}
.row{
	max-width: 30%;
	margin: auto;
	background: white;
	padding: 10px;
}
.row h2{
	padding: 10px;
	margin: auto;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: inline-block;
  clear: both;
}
.textarea {
	padding-bottom: 15px;
	-webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
	
}

</style>
</head>
<body>
    <script src='/js/bootstrap.js'></script>
  <body> 
     <div id="includedContent"></div>
  </body> 
  
      <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
        </div>
    </div>
    </div>

	
	<div class="container">

        <div class="row">
            <div style="text-align: center">
                <h1>Sidebar Notification</h1>
			</div>
		</div>
	</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
  <h2> Staff Sidebar </h2>
		<form class = "textarea" action="send_side.php" method="post">
		  <textarea type="text" name="post_header_staff" rows="2" cols="45"><?php echo $staffheader; ?></textarea>
		  <br><br>
		  <textarea type="text" name="post_body_staff" rows="5" cols="45"><?php echo $staffbody; ?></textarea>
		  <br>
		  <input type="submit">
		  <input type="hidden" name="type" value="staffheader" />
		</form>
  </div>
  <br>
  <div class="column" style="background-color:#bbb;">
  <h2> User Sidebar </h2>
    <form class = "textarea" action="send_side.php" method="post">
	  <textarea type="text" name="post_header_user" rows="2" cols="45"><?php echo $userheader; ?></textarea>
	  <br><br>
	  <textarea type="text" name="post_body_user" rows="5" cols="45"><?php echo $userbody; ?></textarea>
	  <br>
	  <input type="submit">
	  <input type="hidden" name="type" value="userheader" />
	</form>
  </div>
</div>

<form action="http://peacebrookingscalendar.org/admin/test.php">
	<input type="submit" style="position:absolute; bottom:15px; left:15px;" value="Example">
</form>

</body>
</html>