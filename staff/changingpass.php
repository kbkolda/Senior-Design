<?php
include('../login/session.php');
require_once('../bdd.php');
session_start();

$pw = $_POST['changestaffpw'];
$userID = $_POST['pwstaffname'];
$newPass = password_hash($pw,PASSWORD_DEFAULT);
$sql = "UPDATE staff SET staff.password = '$newPass' WHERE staff.username = '$userID'";
$query = $bdd->prepare($sql);
$sth = $query->execute();

header('Location: '.$_SERVER['HTTP_REFERER']);
?>