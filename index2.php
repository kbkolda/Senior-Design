<html lang="en">

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
    width: 370px;
    position: fixed;
    z-index: 1;
    top: 160px;
    right: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
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
</style>
</head>

<body>
<div class="sidenav">
  <H1>Header</H1>
  <p>content goes here</p>
  <p>content goes here</p>
  <p>content goes here</p>
  
</div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="/admin/index">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/user/adduser">Add User</a></li>
                            <li><a href="/admin/user/addchild">Add Child</a></li>
                            <li><a href="/admin/user/usercalendar">User Calendar</a></li>
                            <li><a href="/admin/user/changeuserpass">Change Password</a></li>
                            <li><a href="/admin/user/edituser">Edit User</a></li>
                            <li><a href="/admin/user/editchild">Edit Child</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/adminfunc/modifyadmin">Change Password</a></li>
                            <li><a href="/admin/adminfunc/modifyFrom">Change Distro E-mail</a></li>
                            <li><a href="/admin/adminfunc/viewhistorical">Change Historical Email</a></li>
                            <li><a href="/admin/archive">Archives</a></li>
                            <li><a href="/admin/adminfunc/cleararchive">Clear Archive</a></li>
                            <li><a href="/admin/adminfunc/generatedaily">Child Daily Sheet</a></li>
                            <li><a href="/admin/adminfunc/staffdaily">Staff Daily Sheet</a></li>
                            <li><a href="/admin/adminfunc/addremoveclass">Add/Remove Class Room</a></li>
                            <li><a href="/admin/adminfunc/userDistro">Export User List</a></li>
                            <li><a href="/admin/adminfunc/staffDistro">Export Staff List</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dates<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/scheduling/blockdates">Block/Unblock Dates</a></li>
                            <li><a href="/admin/scheduling/removeevent">Remove Events</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Staff<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/staff/staffcalendar">Staff Calendar</a></li>
                            <li><a href="/admin/staff/addstaff">Add Staff</a></li>
                            <li><a href="/admin/staff/editstaff">Edit Staff</a></li>
                            <li><a href="/admin/staff/changestaffpass">Change Password</a></li>
                        </ul>
                    </li>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin/login_func/logout.php">Log Out</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

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
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Notification 1</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button><span id="display"></span></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
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
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
											
														<div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Notification 2</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>																		
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
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
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">First Day</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button><span id='display'></span></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
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
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Last Day</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button><span id='display'></span></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
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
                                                                        <td onclick="myFunction()" class="fc-day  fc-mon fc-past" data-date="2018-10-01" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-tue fc-past" data-date="2018-10-02" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-wed fc-past" data-date="2018-10-03" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-thu fc-past" data-date="2018-10-04" style="background-color: silver;"></td>
                                                                        <td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
																		<td onclick="myFunction()" class="fc-day  fc-fri fc-past" data-date="2018-10-05" style="background-color: silver;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
															
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="newclass">Date Due</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button><span id='display'></span></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
																		<td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><button class="openmodal myBtn">Set Date</button></span></td>
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
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-01-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>February Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-02-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>March Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-03-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>April Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-04-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>May Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-05-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>June Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-06-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>July Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-07-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>August Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-08-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>September Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-09-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>October Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-10-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>November Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-11-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>December Notification 1</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>January Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-01-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>February Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-02-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>March Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-03-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>April Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-04-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>May Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-05-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>June Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-06-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>July Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-07-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>August Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-08-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>September Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-09-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>October Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-10-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>November Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-11-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>December Notification 2</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-01-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-02-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-03-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-04-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-05-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-06-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-07-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-08-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-09-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-10-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-11-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>First Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-01-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-02-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-03-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-04-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-05-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-06-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-07-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-08-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-09-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-10-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-11-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Last Calendar Day</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			<div class="modal myModal">

			  <!-- Modal content -->
			  <div class="modal-content" style="width: 20%;">
			  <span class="close">&times;</span>
			  <H2>Due Date</H2>
				<form onclick="showInput();">
					Date:
					<input type="date" value="2019-12-01" name="datee" id="user_input">
					<input type="submit">
				</form>
			  </div>
			</div>
			
			
			
		</div>
        <!-- /.row -->
        <!-- ADD Modal -->
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="addEvent.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">◼ Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">◼ Turquoise</option>
						  <option style="color:#008000;" value="#008000">◼ Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">◼ Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">◼ Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">◼ Red</option>
						  <option style="color:#000;" value="#000">◼ Black</option>
						  
						</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="start" class="col-sm-2 control-label">Start date</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start" readonly="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="end" class="col-sm-2 control-label">End date</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end" readonly="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="child" class="col-sm-2 control-label">Child</label>
                                <div class="col-sm-10">
                                    <select name="child" class="form-control" id="child">
													</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="startTime" class="col-sm-2 control-label">Start Time</label>
                                <div class="col-sm-10">
                                    <input class="timepicker" name="timepicker-start">
                                    <script>
                                        $(document).ready(function() {
                                                    $('input.timepicker').timepicker({
                                                                timeFormat: 'h:mm p',
                                                                minTime: '6:00am',
                                                                maxTime: '6:00pm',
                                                                defaultTime: '6:00am',
                                                                startHour: 6,
                                                                startTime: '6:00am',
                                                                interval: 10,
                                                                zindex: 1150,
                                                                dynamic: false,
                                                                dropdown: true,
                                                                scrollbar: true truncated 445 bytes...
                                    </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="endTime" class="col-sm-2 control-label">End Time</label>
                                <div class="col-sm-10">
                                    <input class="timepicker" name="timepicker-end">

                                </div>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- EDIT Modal -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="editEventTitle.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">◼ Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">◼ Turquoise</option>
						  <option style="color:#008000;" value="#008000">◼ Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">◼ Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">◼ Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">◼ Red</option>
						  <option style="color:#000;" value="#000">◼ Black</option>
						  
						</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label class="text-danger"><input type="checkbox" name="delete"> Delete event</label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="id" class="form-control" id="id">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
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
	
</body>

</html>