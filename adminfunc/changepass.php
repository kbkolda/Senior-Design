<?php
include('..login_func/session.php');
require_once('../bdd.php');
session_start();
$pw = $_POST['newpw'];
$newPass = password_hash($pw,PASSWORD_DEFAULT);
$sql = "UPDATE admin SET admin.password = '$newPass' WHERE admin.name = 'admin'";
$query = $bdd->prepare($sql);
$sth = $query->execute();
header('Location: modifyadmin');
?>