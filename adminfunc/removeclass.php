<?php
include('..login_func/session.php');
require_once('../bdd.php');
session_start();


$class = $_POST['removeclass'];



$sql = "DELETE FROM classroom
WHERE room = '$class'";


$query = $bdd->prepare($sql);
$sth = $query->execute();

header('Location: '.$_SERVER['HTTP_REFERER']);





?>