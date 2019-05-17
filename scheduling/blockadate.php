<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();



$datetoblock = $_POST['blockthisdate'];


 $sql = "INSERT INTO `blockdate`(`date`) VALUES ("."'".$datetoblock."'".")";
    $sth = $bdd->prepare($sql);
    $sth->execute();

header('Location: blockdates');
?>