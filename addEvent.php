<?php
session_start();
require_once('bdd.php');

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])
	&& isset($_POST['timepicker-start']) && isset($_POST['timepicker-end'])	
){

	$start = $_POST['start'];
    
    $_SESSION['defaultday'] = "'$start'";
	$title = $_POST['title'];
	$end = $_POST['end'];
	$startTime = $_POST['timepicker-start'];
	$startPM = $startTime;
	$startTime = date("H:i", strtotime($startTime));
	$endTime = $_POST['timepicker-end'];
	$endPM = $endTime;
	$endTime = date("H:i", strtotime($endTime));
	
	$start = $start." ".$startTime;
	$end = $end." ".$endTime;
	$user = $_SESSION['username'];
	$color = $_POST['color'];
	
	if(strlen($title) < 1)
	{
	    $title = $user;
	}
	if($start>$end)
	{
	    $sql = "select * from user";
	}
	else
	{
	    	$sql = "INSERT INTO staffevents(title, start, end, color,user) values ('$title', '$start', '$end', '$color','$user')";
	}

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
	else
	{
    set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/php" . PATH_SEPARATOR . get_include_path());
        require_once "Mail.php";
    //WHO THE EMAIL IS DELIVERED TO
    $usersql = "SELECT email from staff where username = '".$user."'";
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
     $to     = $useremail;
    //LOCAL ACCOUNT ON BLUEHOST
    $from    = $servermail; // the email address
    //Subject of message
    //Convert start and end to 1 string
    $gdate = date("Y M. d", strtotime($start));
    $adate = $gdate;
    $startPM = str_replace(' ', '', $startPM);
    $endPM = str_replace(' ', '', $endPM);
    $gdate = $gdate." ".$startPM."-".$endPM;
    $subject = "Peace Brookings: Scheduled for ".$adate."!";
    //Body of Message
    $body    = "\nTitle: ".$title."
                \nUser Name: ".$user."
                \nEvent: ".$gdate;
    $host    = "peacebrookingscalendar.org";
    $port    =  "587";
    //Login for local server E-mailer
    $user    = $servermail;
    $pass    = $serverpass;
    $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);
    //$smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
    //$mail    = @$smtp->send($to, $headers, $body);

	}

}

    $tthisday = date("Y M. d");	$sqlday = date("Y-m-d H:i:s");
    
	$theuser = $_SESSION['username'];
	$archive = "ADD - STAFF - $theuser - $gdate";
	
	$tsql = "INSERT INTO archive(information,date,user,child) VALUES ('$archive','$sqlday','$theuser',' ')";
	$bdd->prepare( $tsql );
	$tquery = $bdd->prepare( $tsql );
    $tquery->execute();


	$theuser = $_SESSION['username'];
	$usersql = "SELECT email from historicalemail";

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
     $to     = $useremail;
    //LOCAL ACCOUNT ON BLUEHOST
    $from    = $servermail; // the email address
    //Subject of message
    //Convert start and end to 1 string
    $gdate = date("Y M. d", strtotime($start));
    $adate = $gdate;
    $startPM = str_replace(' ', '', $startPM);
    $endPM = str_replace(' ', '', $endPM);
    $gdate = $gdate." ".$startPM."-".$endPM;
    $subject = "Peace Brookings: ".$child." scheduled for ".$adate."!";
    //Body of Message
    $body    = "\nTitle: ".$title."
                \nChild Name: ".$child."
                \nUser Name: ".$theuser."
                \nEvent: ".$gdate;
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
