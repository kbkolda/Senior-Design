<?php 
include './header.html'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <script src='/js/bootstrap.js'></script>
  <body> 
     <div id="includedContent"></div>
  </body> 
  
      <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
        </div>
    </div>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Changelog</title>

<style type='text/css' media='all'>@import url('./userguide.css');</style>
<link rel='stylesheet' type='text/css' media='all' href='../userguide.css' />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

<meta http-equiv='expires' content='-1' />
<meta http-equiv= 'pragma' content='no-cache' />
<meta name='robots' content='all' />

</head>
<body>


<br clear="all" />


<!-- START CONTENT -->
<div id="content"><h1>Change Log</h1>

<h2>Version 0.9.0</h2>
<p>Release Date: 04/23/2019</p>

<h4>Admin</h4>
<ul>
	<li>Archive bugs fixed.</li>
	<li>Staff archive added.</li>
	<li>HTTPS support added.</li>
	<li>Adding staff includes phone number and classroom.</li>
	<li>Editing staff includes phone number and classroom.</li>
	<li>Staff export includes phone number and classroom.</li>
	<li>Edit user includes greyed out username.</li>
	<li>Lastname, Firstname dropdown bug fixes.</li>
</ul>


<h2>Version 0.8.3</h2>
<p>Release Date: 04/08/2019</p>

<h4>General</h4>
<ul>
    <li>Favicon added to all pages.</li>
    <li>Artwork added to all login pages.</li>
</ul>
<h4>Admin</h4>
<ul>
	<li>Added export column to header.</li>
	<li>Added export children function.</li>
	<li>Added export unsubmitted staff function.</li>
	<li>Staff archive added - fixing bug where user is unable to be archived.</li>
	<li>Found bug with entire archive system - disabling archive until problem resolved.</li>
	<li>Added admin function user manual.</li>
	<li>Username added to edit user page.</li>
	<li>Lastname, Firstname dropdown fixed in a few spots.</li>
	<li>Child export sorted by DOB</li>
	<li>Staff submit state removed 1st of every month.</li>
	<li>PT Staff now default option when adding a staff member.</li>
</ul>


<h2>Version 0.8.2</h2>
<p>Release Date: 03/28/2019</p>


<h4>General</h4>
<ul>
	<li>Added titles on each login page.</li>
	<li>Staff emails link to staff login.</li>
	<li>Emails not as spammy.</li>
</ul>

<h4>Admin</h4>
<ul>
	<li>Edit user, child, and staff lists users by last name, first name instead of username.</li>
	<li>Added help page to header.</li>
	<li>Added export children function - Not yet in header.</li>
	<li>Added export unsubmitted staff function - Not yet in header.</li>
	<li>Fixed edit child classroom functionality.</li>
</ul>
<h4>Staff</h4>
<ul>
    <li>Added submit button to staff calendar.</li>
    <li>Added submitState column to staff database table.</li>
    <li>Title and color fields moved to the bottom of addEvent modal.</li>
    <li>Deleting an event does not send an email to the user.</li>
    <li>Submitting a calendar sends a confirmation email.</li>
</ul>
<h4>Users</h4>
<ul>
    <li>Deleting an event does not send an email to the user.</li>
    <li>Submitting a calendar sends a confirmation email.</li>
</ul>

<h2>Version 0.8.1</h2>
<p>Release Date: 03/25/2019</p>

<h4>Admin</h4>
<ul>
    <li>Added changelog.</li>
	<li>Archive page added.</li>
	<ul>
	    <li>Archived users cannot login.</li>
	    <li>Archived users cannot be exported in user list.</li>
	    <li>Archived users are not shown on edit user page.</li>
	    <li>Archived users can be unarchived.</li>
	</ul>
	<li>Export Unsubmitted Users exports a list of unsubmitted users with contact info.</li>
	<li>Staff and children daily sheets do not include seconds in time format.</li>
	<li>Notification system implemented.</li>
</ul>

<h4>Users</h4>
<ul>
	<li>Added message on submit of child class.</li>
	<li>Title and color fields moved to bottom of addEvent modal.</li>
</ul>
<br><br><br>


</body>
</html>