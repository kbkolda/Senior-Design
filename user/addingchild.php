<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();

// $bdd database object
// $sql = make sql statement
// $req= $bdd->prepare($sql) : prepare sql statement
//$req->execute();

$addchildusername =     $_POST['addchildusername']; //
$addchildname =         $_POST['addchildname']; //
$addnickname =          $_POST['addnickname']; //
$adddateofbirth =       $_POST['adddateofbirth']; //
$addecontactname =      $_POST['addecontactname']; //
$addecontacthomephone = $_POST['addecontacthomephone']; //
$addecontactworkphone = $_POST['addecontactworkphone'];// 
$addmedicalconditions = $_POST['addmedicalconditions']; //




$sql = "INSERT INTO children (name,parentID,dob,nickname,emergencycontact,emergencyhomenumber,emergencyworknumber,medicalconditions)
            VALUES('$addchildname','$addchildusername','$adddateofbirth','$addnickname',
            '$addecontactname','$addecontacthomephone','$addecontactworkphone','$addmedicalconditions');";

$req = $bdd->prepare($sql);
$req->execute();      
header('Location: addchild');



?>