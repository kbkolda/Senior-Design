<?php

session_start();
require_once('bdd.php');

	$theuser = $_SESSION['username'];
    $archive = "Calendar Submit";
    $sqlday = date("Y-m-d H:i:s");
	$tsql = "INSERT INTO archive(information,date,user,child) VALUES ('$archive','$sqlday','$theuser',' ')";
	$bdd->prepare( $tsql );
	$tquery = $bdd->prepare( $tsql );
    $tquery->execute();
	
	$sql = "UPDATE userinfo
                INNER JOIN user ON userinfo.userID = user.userID
                SET userinfo.submitState = true
                WHERE user.user = '$theuser'";
     $bdd->prepare( $sql );
	$tquery = $bdd->prepare( $sql );
    $tquery->execute();         

header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>