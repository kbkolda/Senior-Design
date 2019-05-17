<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();

// $bdd database object
// $sql = make sql statement
// $req= $bdd->prepare($sql) : prepare sql statement
//$req->execute();
$addusername =      $_POST['addusername'];// 
$addfirstname =     $_POST['addfirstname']; //
$addlastname =      $_POST['addlastname']; //
$addpassword =      $_POST['addpassword']; //
$addphone =         $_POST['phone'];
$addemail =         $_POST['email'];
$addType =          $_POST['addtype'];
$addclassroom =      $_POST['addclassroom'];

$addusername = stripslashes($addusername);
$addpassword = stripslashes($addpassword);

$addpassword = password_hash($addpassword,PASSWORD_DEFAULT);

//$sql = "INSERT INTO staff(username,firstname,lastname,email,password,Type,phone) VALUES ('$addusername','$addfirstname','$addlastname','$addemail','$addpassword','$addType','$addphone');";
$sql = "INSERT INTO staff(username,firstname,lastname,email,password,Type,phone,classroom) VALUES ('$addusername','$addfirstname','$addlastname','$addemail','$addpassword','$addType','$addphone','$addclassroom');";

$req = $bdd->prepare($sql);
$req->execute();


$req = $bdd->prepare($sql);
$req->execute();      

header('Location: '.$_SERVER['HTTP_REFERER']);
    

?>