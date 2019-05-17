<?php
include('./login_func/session.php');
require_once('bdd.php');
session_start();

// $bdd database object
// $sql = make sql statement
// $req= $bdd->prepare($sql) : prepare sql statement
//$req->execute();
$conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	


$theuser = $_POST['userselect'];
$userid = "";
$sql = "select userid from user where user = '$theuser'";
                        $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                foreach($row as $cname => $cvalue){
                                    $userid = $cvalue;
                                }					
                            }

$sql = "SELECT * FROM userinfo where userID = '$userid'";
 $result = mysqli_query($conn, $sql);
$arow = $result->fetch_row();
$_GET['uifname'] = $arow[1];//first name
$_GET['uilname'] = $arow[2];//last name
$_GET['uicity'] = $arow[3];//city
$_GET['uistate'] = $arow[5];//state
$_GET['uizip'] = $arow[6];//zip
$_GET['uihp'] = $arow[7];//homephone
$_GET['uiwp'] = $arow[8];//workphone
$_GET['uiemail'] = $arow[9];//email


header('Location: userinfo');


?>