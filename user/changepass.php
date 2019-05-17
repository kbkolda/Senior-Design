<?php
include('../login/session.php');
require_once('../bdd.php');
session_start();

$pw = $_POST['changeuserpw'];
$userID = $_POST['pwusername'];
$newPass = password_hash($pw,PASSWORD_DEFAULT);
$sql = "UPDATE user SET user.password = '$newPass' WHERE user.user = '$userID'";
$query = $bdd->prepare($sql);
$sth = $query->execute();

header('Location: '.$_SERVER['HTTP_REFERER']);
?>