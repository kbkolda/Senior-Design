<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();


$servername = "localhost";
$username = "peacebr2_user";
$password = "dbuser";
$dbname = "peacebr2_db";
$userid = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$remove = "UPDATE staff SET archive = '0' WHERE username = '$userid'";





if ($conn->query($remove) === TRUE) {
    $conn->close();

header("Location: https://www.peacebrookingscalendar.org/admin/staff/staffarchive.php");

}
?>