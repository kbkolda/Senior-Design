<?
include('../login_func/session.php');
require_once('../bdd.php');
session_start();
$fname = $_POST['efname'];
$lname = $_POST['elname'];
$street = $_POST['estreet'];
$city = $_POST['ecity'];
$state = $_POST['estate'];
$zip = $_POST['ezip'];
$hp = $_POST['ehomephone'];
$wp = $_POST['eworkphone'];
$email = $_POST['eemail'];
$archive = $_POST['earchive'];
$select = $_SESSION['selecteduser'];

$sql = "UPDATE
    userinfo
    INNER JOIN user on user.userID = userinfo.userID
SET
    userinfo.firstname 	= 	'$fname',
    userinfo.lastname 	= 	'$lname',
    userinfo.street 	= 	'$street',
    userinfo.city		= 	'$city',
    userinfo.state 		= 	'$state',
    userinfo.zip		= 	'$zip',
    userinfo.homephone 	= 	'$hp',
    userinfo.workphone 	= 	'$wp',
    userinfo.email    	= 	'$email'
 
WHERE
	user.user = '$select'";

$query = $bdd->prepare( $sql );
$sth = $query->execute();

if(isset($_POST['earchive']))
{
    $sql = "UPDATE user SET archive = 1 WHERE user.user = '$select'";

    $query = $bdd->prepare( $sql );
    $sth = $query->execute();
}

if(isset($_SESSION['selecteduser']))
{
    unset($_SESSION['selecteduser']);
}

header('Location: '.$_SERVER['HTTP_REFERER']);

?>