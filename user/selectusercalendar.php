<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();

// $bdd database object
// $sql = make sql statement
// $req= $bdd->prepare($sql) : prepare sql statement
//$req->execute();

$_SESSION['selectusercalendar']  =     $_POST['selectusercalendar']; //

header('Location: usercalendar');

?>