<?php

 session_start();
// Connexion à la base de données
require_once('bdd.php');

//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])
	&& isset($_POST['timepicker-start']) && isset($_POST['timepicker-end'])	
){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$startTime = $_POST['timepicker-start'];
	
	$startTime = date("H:i", strtotime($startTime));
	
	$endTime = $_POST['timepicker-end'];
	
	$endTime = date("H:i", strtotime($endTime));
	
	$child = $_POST['child'];
	$start = $start." ".$startTime;
	$end = $end." ".$endTime;
	$user = $_SESSION['username'];
	$color = $_POST['color'];
	
	if(strlen($title) < 1)
	{
	    $title = $child;
	}
	if($start>$end)
	{
	    $sql = "select * from user";
	}
	else
	{
	    	$sql = "INSERT INTO events(title, start, end, color,user,child) values ('$title', '$start', '$end', '$color','$user','$child')";
	}


	

	//$req = $bdd->prepare($sql);
	//$req->execute();
		
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
