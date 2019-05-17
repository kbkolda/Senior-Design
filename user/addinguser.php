<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();

// $bdd database object
// $sql = make sql statement
// $req= $bdd->prepare($sql) : prepare sql statement
//$req->execute();

$addfirstname =     $_POST['addfirstname']; //
$addlastname =      $_POST['addlastname']; //
$addstreetaddress = $_POST['addstreetaddress']; //
$addcity =          $_POST['addcity']; //
$addstate =         $_POST['addstate']; //
$addzip =           $_POST['addzip']; //
$addusername =      $_POST['addusername'];// 
$addpassword =      $_POST['addpassword']; //
$addworkphone =     $_POST['workphone'];
$addhomephone =     $_POST['homephone'];
$addemail =         $_POST['email'];


$addusername = stripslashes($addusername);
$addpassword = stripslashes($addpassword);


$addpassword = password_hash($addpassword,PASSWORD_DEFAULT);

$sql = "INSERT INTO user(user,password) VALUES ('$addusername','$addpassword');";

$req = $bdd->prepare($sql);
$req->execute();


$conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	
$sql = "SELECT userID from user where user = '$addusername';";
$userID = "";

$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		foreach($row as $cname => $cvalue){
            $userID = $cvalue;
				}					
            }

$sql = "INSERT INTO userinfo(userID,firstname,lastname,street,city,state,zip,homephone,workphone,email)
            VALUES('$userID','$addfirstname','$addlastname','$addstreetaddress',
            '$addcity','$addstate','$addzip','$addhomephone','$addworkphone', '$addemail');";
$req = $bdd->prepare($sql);
$req->execute();      

header("Location: adduser.php");
    

?>