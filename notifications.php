<html lang="en">
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

$sql = "SELECT header FROM email";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$header = $row["header"];

$sql = "SELECT body FROM email";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$body = $row["body"];

$sql = "SELECT email FROM email";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$email = $row["email"];

$sql = "SELECT jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dbr FROM calendar WHERE notification='not1'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	$not1jan = $row['jan'];
	$not1feb = $row['feb'];
	$not1mar = $row['mar'];
	$not1apr = $row['apr'];
	$not1may = $row['may'];
	$not1jun = $row['jun'];
	$not1jul = $row['jul'];
	$not1aug = $row['aug'];
	$not1sep = $row['sep'];
	$not1oct = $row['oct'];
	$not1nov = $row['nov'];
	$not1dbr = $row['dbr'];
}
$sql = "SELECT jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dbr FROM calendar WHERE notification='not2'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	$not2jan = $row['jan'];
	$not2feb = $row['feb'];
	$not2mar = $row['mar'];
	$not2apr = $row['apr'];
	$not2may = $row['may'];
	$not2jun = $row['jun'];
	$not2jul = $row['jul'];
	$not2aug = $row['aug'];
	$not2sep = $row['sep'];
	$not2oct = $row['oct'];
	$not2nov = $row['nov'];
	$not2dbr = $row['dbr'];
}
$sql = "SELECT jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dbr FROM calendar WHERE notification='first'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	$firstjan = $row['jan'];
	$firstfeb = $row['feb'];
	$firstmar = $row['mar'];
	$firstapr = $row['apr'];
	$firstmay = $row['may'];
	$firstjun = $row['jun'];
	$firstjul = $row['jul'];
	$firstaug = $row['aug'];
	$firstsep = $row['sep'];
	$firstoct = $row['oct'];
	$firstnov = $row['nov'];
	$firstdbr = $row['dbr'];
}
$sql = "SELECT jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dbr FROM calendar WHERE notification='last'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	$lastjan = $row['jan'];
	$lastfeb = $row['feb'];
	$lastmar = $row['mar'];
	$lastapr = $row['apr'];
	$lastmay = $row['may'];
	$lastjun = $row['jun'];
	$lastjul = $row['jul'];
	$lastaug = $row['aug'];
	$lastsep = $row['sep'];
	$lastoct = $row['oct'];
	$lastnov = $row['nov'];
	$lastdbr = $row['dbr'];
}
$sql = "SELECT jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dbr FROM calendar WHERE notification='due'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	$duejan = $row['jan'];
	$duefeb = $row['feb'];
	$duemar = $row['mar'];
	$dueapr = $row['apr'];
	$duemay = $row['may'];
	$duejun = $row['jun'];
	$duejul = $row['jul'];
	$dueaug = $row['aug'];
	$duesep = $row['sep'];
	$dueoct = $row['oct'];
	$duenov = $row['nov'];
	$duedbr = $row['dbr'];
}

$conn->close();
?>

<head>
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
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 19%;
    position: fixed;
    z-index: 1;
    top: 160px;
    right: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
	height: 28%;
}

.sidenav H1 {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #2196F3;
    display: block;
}

.sidenav p {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: black;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.main {
    margin-left: 140px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
	
}
.textarea {
	margin: auto;
	width: 30%;
	padding: 25px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>
</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Notification Settings</h1>
                <p class="lead"></p>
                <!-- title below title-->
                <div id="calendar" class="col-centered fc fc-bootstrap3 fc-ltr">
                    <div class="fc-view-container" style="">
                        <div class="fc-view fc-month-view fc-basic-view" style="">
                            <table class="table-bordered">
                                <thead class="fc-head">
                                    <tr>
                                        <td class="fc-head-container ">
                                            <div class="fc-row panel-default">
                                                <table class="table-bordered">
                                                    <thead>
                                                        <tr>
															<th class="fc-day-header  fc-fri"><span> </span></th>
                                                            <th class="fc-day-header  fc-mon"><span>January</span></th>
                                                            <th class="fc-day-header  fc-tue"><span>February</span></th>
                                                            <th class="fc-day-header  fc-wed"><span>March</span></th>
                                                            <th class="fc-day-header  fc-thu"><span>April</span></th>
                                                            <th class="fc-day-header  fc-fri"><span>May</span></th>
															<th class="fc-day-header  fc-fri"><span>June</span></th>
															<th class="fc-day-header  fc-fri"><span>July</span></th>
															<th class="fc-day-header  fc-fri"><span>August</span></th>
															<th class="fc-day-header  fc-fri"><span>September</span></th>
															<th class="fc-day-header  fc-fri"><span>October</span></th>
															<th class="fc-day-header  fc-fri"><span>November</span></th>
															<th class="fc-day-header  fc-fri"><span>December</span></th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody class="fc-body">
                                    <tr>
                                        <td class="">
                                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 280px;">
                                                <div class="fc-day-grid fc-unselectable">
                                                    <div class="fc-row fc-week panel-default fc-rigid" style="height: 50px;">
                                                        <div class="fc-bg">
                                                            <table class="table-bordered">
                                                                <tbody>
                                                                    <tr>
																	    <td class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: white;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></br></br>&#160;<?php echo $not1jan; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></br></br>&#160;<?php echo $not1feb; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></br></br>&#160;<?php echo $not1mar; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></br></br>&#160;<?php echo $not1apr; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1may; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1jun; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1jul; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1aug; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1sep; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1oct; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1nov; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not1dbr; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Notification 1</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week panel-default fc-rigid" style="height: 50px;">
                                                        <div class="fc-bg">
                                                            <table class="table-bordered">
                                                                <tbody>
                                                                    <tr>
																	    <td class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: white;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></br></br>&#160;<?php echo $not2jan; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></br></br>&#160;<?php echo $not2feb; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></br></br>&#160;<?php echo $not2mar; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></br></br>&#160;<?php echo $not2apr; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2may; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2jun; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2jul; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2aug; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2sep; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2oct; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2nov; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $not2dbr; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
											
														<div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Notification 2</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>																		
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
													<div class="fc-row fc-week panel-default fc-rigid" style="height: 50px;">
                                                        <div class="fc-bg">
                                                            <table class="table-bordered">
                                                                <tbody>
                                                                    <tr>
																	    <td class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: white;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></br></br>&#160;<?php echo $firstjan; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></br></br>&#160;<?php echo $firstfeb; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></br></br>&#160;<?php echo $firstmar; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></br></br>&#160;<?php echo $firstapr; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstmay; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstjun; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstjul; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstaug; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstsep; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstoct; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstnov; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $firstdbr; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">First Day</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
													<div class="fc-row fc-week panel-default fc-rigid" style="height: 50px;">
                                                        <div class="fc-bg">
                                                            <table class="table-bordered">
                                                                <tbody>
                                                                    <tr>
																	    <td class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: white;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></br></br>&#160;<?php echo $lastjan; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></br></br>&#160;<?php echo $lastfeb; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></br></br>&#160;<?php echo $lastmar; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></br></br>&#160;<?php echo $lastapr; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastmay; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastjun; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastjul; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastaug; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastsep; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastoct; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastnov; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $lastdbr; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Last Day</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
													<div class="fc-row fc-week panel-default fc-rigid" style="height: 50px;">
                                                        <div class="fc-bg">
                                                            <table class="table-bordered">
                                                                <tbody>
                                                                    <tr>
																	    <td class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: white;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></br></br>&#160;<?php echo $duejan; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></br></br>&#160;<?php echo $duefeb; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></br></br>&#160;<?php echo $duemar; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></br></br>&#160;<?php echo $dueapr; ?></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $duemay; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $duejun; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $duejul; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $dueaug; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $duesep; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $dueoct; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $duenov; ?></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></br></br>&#160;<?php echo $duedbr; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Date Due</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03" style="position:relative; left:-3px;"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>                                                                                                               
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
			<div class="modal myModal">

			  <!-- Modal content -->
				<div class="modal-content" style="width: 20%;">
				<span class="close">&times;</span>
				<H2>January Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="jan" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>February Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="feb" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>March Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="mar" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>April Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="apr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>May Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="may" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>June Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="jun" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>July Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="jul" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>August Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="aug" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>September Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="sep" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>October Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="oct" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>November Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="nov" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>December Notification 1</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not1" />
					<input type="hidden" name="month" value="dbr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>January Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="jan" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>February Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="feb" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>March Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="mar" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>April Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="apr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>May Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="may" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>June Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="jun" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>July Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="jul" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>August Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="aug" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>September Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="sep" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>October Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="oct" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>November Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="nov" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>December Notification 2</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="not2" />
					<input type="hidden" name="month" value="dbr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="jan" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="feb" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="mar" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="apr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="may" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="jun" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="jul" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="aug" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="sep" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="oct" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="nov" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="first" />
					<input type="hidden" name="month" value="dbr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="jan" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="feb" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="mar" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="apr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="may" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="jun" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="jul" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="aug" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="sep" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="oct" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="nov" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="last" />
					<input type="hidden" name="month" value="dbr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="jan" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="feb" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="mar" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="apr" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="may" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="jun" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="jul" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="aug" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="sep" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="oct" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="nov" />
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form action="send_date.php" method="post">
					Date:
					<input type="date" value="2019-01-01" name="post_date">
					<input type="hidden" name="type" value="due" />
					<input type="hidden" name="month" value="dbr" />
					<input type="submit">
				</form>
			  </div>
			</div>
		</div>
        


    </div>
    <!-- /.container -->
    <!-- jQuery Version 1.11.1 -->
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- FullCalendar -->
    <script src="../js/moment.min.js"></script>
    <script src="../js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css">

    <link href="css/fullcalendar.css" rel="stylesheet">
    <link href="css/fullcalendar.print.min.css" rel="stylesheet" media="print">
    <link href="css/fullcalendar.min.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
                    function fmt(date) {
                        return date.format("YYYY-MM-DD HH:mm");
                    }
                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();

                    $('#calendar').fullCalendar({
                                header: {
                                    left: 'prev,next,today',
                                    center: 'title',
                                    right: 'month,listDay,listWeek'
                                },

                                // customize truncated 4962bytes...
    </script>
	<script>
var modals = document.getElementsByClassName('modal');
// Get the button that opens the modal
var btns = document.getElementsByClassName("openmodal");
var spans=document.getElementsByClassName("close");

for(let i=0;i<btns.length;i++){
   btns[i].onclick = function() {
      modals[i].style.display = "block";
   }
}
for(let i=0;i<spans.length;i++){
    spans[i].onclick = function() {
       modals[i].style.display = "none";
    }
 }
function showInput() {
        document.getElementById('display').innerHTML = 
                    document.getElementById("user_input").value;
    }
													</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <div class="ui-timepicker-container ui-timepicker-hidden ui-helper-hidden" style="display: none;">
        <div class="ui-timepicker ui-widget ui-widget-content ui-menu ui-corner-all">
            <ul class="ui-timepicker-viewport"></ul>
        </div>
    </div>
		
<form class = "textarea" action="send_date.php" method="post">
  <textarea type="text" name="post_email" rows="5" cols="80"><?php echo $email; ?></textarea>
  <br>
  <input type="submit" style="position:relative; top:15px; left:50%;">
  <input type="hidden" name="type" value="email" />
</form>	








</body>

</html>