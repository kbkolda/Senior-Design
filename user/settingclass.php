<?php 

include('./login/session.php');
require_once('bdd.php');





$schild = $_POST['selectedchild'];
$sclass = $_POST['selectedclass'];
$user = $_SESSION['username'];



$sql = "UPDATE children set classroom = '$sclass' where children.parentID = '$user' and children.name = '$schild'";
$query = $bdd->prepare( $sql );

$sth = $query->execute();


header('Location: ' ."https://www.peacebrookingscalendar.org/user/index");









?>



