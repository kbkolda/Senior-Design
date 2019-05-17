<?php
include('..login_func/session.php');
require_once('../bdd.php');
session_start();
$datelimit = $_POST['count'];

$sql = "DELETE FROM archive
WHERE archive.date <= '$datelimit'";


$query = $bdd->prepare($sql);
$sth = $query->execute();

header('Location: '.$_SERVER['HTTP_REFERER']);


?>