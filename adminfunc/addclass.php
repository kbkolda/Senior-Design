<?php
include('..login_func/session.php');
require_once('../bdd.php');
session_start();


$class = $_POST['newclass'];



$sql = "INSERT INTO classroom(room) VALUES ('$class')";


$query = $bdd->prepare($sql);
$sth = $query->execute();

header('Location: '.$_SERVER['HTTP_REFERER']);





?>