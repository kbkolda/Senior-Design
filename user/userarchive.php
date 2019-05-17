<?php
include '../header.html';
include('../login_func/session.php');
require_once('../bdd.php');
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

$sql = "SELECT user, userID FROM user WHERE archive = 1";
$result = $conn->query($sql);



?>
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

<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin: auto;
  margin-top: 0%;
 
}

table td, table th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  width: 25%;
}

table tr:nth-child(even) {
  background-color: #dddddd;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  height: 4.7%;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

table tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

	
	<div class="container">

        <div class="row">
            <div style="text-align: center">
                <h1>Archived Users</h1>
			</div>
		</div>
	</div>
<form class="example"  style="float:left; max-width:300px; margin-top: 2%; margin-left: 10%">
  <input type="text" onkeyup="myFunction()" id="myInput" placeholder="Search.." name="search2">
  <button type="button"><i class="fa fa-search"></i></button>
</form>



<table id="myTable">
  <tr>
    <th>User</th>
    <th>First</th>
	<th>Last</th>
	<th>Unarchive</th>
  </tr>
  <tr>
  <?php

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		$userid = $row["userID"];
		$sql2 = "SELECT firstname, lastname FROM userinfo WHERE userID = $userid";
		$result2 = $conn->query($sql2);
		$row2 = $result2->fetch_assoc();
        echo "<tr><td>" . $row["user"]. "</td><br>";
		echo "<td>" . $row2["firstname"]. "</td><br>";
		echo "<td>" . $row2["lastname"]. "</td><br> <td>
			<button type='submit' name='remove' onclick='dropdown(this.value);' id='remove' value='$userid'>Remove</button></td>
		<br></tr>";	
		
    }
} 
else 
{
    echo "0 results";
}
$conn->close();
//<form method='post' action='handler.php'>
//</form>
?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function dropdown(id)
{
	if (confirm('Are you sure you want to remove from archive?')) 
	{
		window.location = "handler.php?id=" + id;
	} else 
	{
		window.location = "userarchive.php";
	}
}
</script>
</body>
</html>

