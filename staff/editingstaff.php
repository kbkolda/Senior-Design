<?

include('../login_func/session.php');
require_once('../bdd.php');
session_start();
$username = $_POST['susername'];
$firstname = $_POST['sfirstname'];
$lastname = $_POST['slastname'];
$email = $_POST['semail'];
$phone = $_POST['sphone'];
$classroom = $_POST['sclassroom'];
$staffrole = $_POST['staffroledd'];
$archive = $_POST['sarchive'];



$sql = "UPDATE staff SET username = '$username', firstname = '$firstname', lastname = '$lastname', email = '$email', Type = '$staffrole', phone = '$phone', classroom = '$classroom' WHERE username = '".$_SESSION['selectedstaff']."'";

$query = $bdd->prepare( $sql );
$sth = $query->execute();

if(isset($_POST['sarchive']))
{
    $sql = "UPDATE staff SET archive = 1 WHERE username = '".$_SESSION['selectedstaff']."'";

    $query = $bdd->prepare( $sql );
    $sth = $query->execute();
}

if(isset($_SESSION['selectedstaff']))
{
    unset($_SESSION['selectedstaff']);
}

header('Location: '.$_SERVER['HTTP_REFERER']);

?>