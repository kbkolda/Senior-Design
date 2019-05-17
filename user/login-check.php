<?php
 session_start();
 $_SESSION['errors'] = array("Your username or password was incorrect.");
 header("Location: login");


$host="localhost"; // Host name 
$username="peacebr2_user"; // Mysql username 
$password="dbuser"; // Mysql password 
$db_name="peacebr2_db"; // Database name 
$tbl_name="user"; // Table name 
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password",$db_name)or die("cannot connect"); 

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 
// To protect mysqliL injection (more detail about mysqliL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
//$password = password_hash($password,PASSWORD_BCRYPT,salt("salty"));


$sql = "SELECT password from user WHERE user = '$username'";


$result = mysqli_query($conn,$sql);
$encrpytedpw = "abc";
while($row = mysqli_fetch_assoc($result)){
    foreach($row as $cname => $cvalue){
        $encrpytedpw = $cvalue;
    }
}

$hash = $encrpytedpw;

$hash = substr( $hash, 0, 60 );
if(password_verify($password,$hash))
{
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['errors'] = null;
    header("Location: ../index");}
else
{
   $_SESSION['errors'] = array("Your username or password was incorrect.");
   header("Location: login"); //Redirect user back to your login form}
}



?>