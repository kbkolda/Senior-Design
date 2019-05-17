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

$remove = "UPDATE user SET archive = '0' WHERE userID = $userid";





if ($conn->query($remove) === TRUE) {
    $conn->close();

header("Location: http://peacebrookingscalendar.org/admin/user/userarchive.php");

}
?>