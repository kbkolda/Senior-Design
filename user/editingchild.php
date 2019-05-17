<?

include('../login_func/session.php');
require_once('../bdd.php');
session_start();



$cname =    $_POST['echildname'];
$cdob =    $_POST['edob'];
$cnick =    $_POST['enickname'];
$cecont =    $_POST['econtactname'];
$chome =    $_POST['ehomenumber'];
$cwork =    $_POST['eworknumber'];
$cmed =    $_POST['emedicalconditions'];
$cclass = $_POST['eclassroom'];


$thechild = $_SESSION['selectedchild'];
$theuser = $_SESSION['selecteduser'];

$sql = "UPDATE children,user SET name = '$cname', dob = '$cdob', nickname = '$cnick', emergencycontact = '$cecont', emergencyhomenumber = '$chome', emergencyworknumber = '$cwork', medicalconditions = '$cmed', classroom = '$cclass'
WHERE children.name = '$thechild' AND user.user = '$theuser'";


    $sth = $bdd->prepare($sql);
    $sth->execute();
    
header('Location: '.$_SERVER['HTTP_REFERER']);


?>