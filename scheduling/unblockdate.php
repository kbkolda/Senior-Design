<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();


$ublock = $_POST['unblock'];


 $sql = "DELETE FROM `blockdate` WHERE date = "."'".$ublock."'";
    $sth = $bdd->prepare($sql);
    $sth->execute();

header('Location: blockdates');
?>