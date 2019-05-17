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
    
    
    
    $user = $_SESSION['username'];
	  set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/php" . PATH_SEPARATOR . get_include_path());
    require_once "Mail.php";
    //WHO THE EMAIL IS DELIVERED TO
    $usersql = "SELECT email from userinfo
                INNER JOIN user on user.userID = userinfo.userID
                where user = '".$user."'";

    $query = $bdd->prepare( $usersql );
    $useremail = "";
    foreach($bdd->query($usersql) as $row)
    {
        if($useremail == "")
        $useremail = $row['email'];
    }
    $servermail = "";
    $serverpass = "";
    
    $serversql = "select email,password from distro";
    
    
    $query = $bdd->prepare($serversql);
    foreach($bdd->query($serversql) as $row)
    {
            $servermail = $row['email'];
            $serverpass = $row['password'];
        
    }
    
    
    $month = date('F', strtotime('+1 month'));
    
     $to     = $useremail;
    //LOCAL ACCOUNT ON BLUEHOST
    $from    = $servermail; // the email address
    $subject = "Peace Brookings: Calendar Submission Confirmation";
    //Body of Message
    $body    = "You've submitted your calendar for $month. \n\nThanks for using peacebrookingscalendar.org. \n";
    $host    = "peacebrookingscalendar.org";
    $port    =  "587";
    //Login for local server E-mailer
    $user    = $servermail;
    $pass    = $serverpass;
    $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);
    $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
    $mail    = @$smtp->send($to, $headers, $body);


header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>