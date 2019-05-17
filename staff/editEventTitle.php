<?php

require_once('bdd.php');
session_start();

class Event{
    
        public $id;
        public $title;
        public $color;
        public $start;
        public $end;
        public $user;
}





if (isset($_POST['delete']) && isset($_POST['id'])){

	$id = $_POST['id'];
	$sql = "SELECT * FROM staffevents where id = $id";
	$sth = $bdd->prepare( $sql );
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_CLASS,"Event");
    
    $eventResult = $result[0];
    

	$sql = "DELETE FROM staffevents WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	    print_r($bdd->errorInfo());
	    die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	    print_r($query->errorInfo());
	    die ('Erreur execute');
	}
	
	$user = $_SESSION['username'];
	  set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/php" . PATH_SEPARATOR . get_include_path());
    require_once "Mail.php";
    //WHO THE EMAIL IS DELIVERED TO
    /*$usersql = "SELECT email from staff
                where username = '".$user."'";

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
    $subject = "Peace Brookings: Event has been removed!";
    //Body of Message
    $body    = "Removed event $eventResult->title: $eventResult->start to $eventResult->end";
    $host    = "peacebrookingscalendar.org";
    $port    =  "587";
    //Login for local server E-mailer
    $user    = $servermail;
    $pass    = $serverpass;
    $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);
    $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
    $mail    = @$smtp->send($to, $headers, $body);*/




    $tthisday = date("Y M. d");	$sqlday = date("Y-m-d H:i:s");
    
	$archive = "REMOVE - STAFF -  $eventResult->user - Start: $eventResult->start End:$eventResult->end";
	
	$tsql = "INSERT INTO archive(information,date,user,child) VALUES ('$archive','$sqlday','$eventResult->user',' ')";
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
    $gdate = date("Y M. d", strtotime($eventResult->start));
    $adate = $gdate;
    $subject = "Peace Brookings: $theuser Removed Event scheduled for $eventResult->start to $eventResult->end";
    //Body of Message
    $body    = "";
    $host    = "peacebrookingscalendar.org";
    $port    =  "587";
    //Login for local server E-mailer
    $user    = $servermail;
    $pass    = $serverpass;
    $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);
    $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
    $mail    = @$smtp->send($to, $headers, $body);











}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	
	$sql = "UPDATE events SET  title = '$title', color = '$color' WHERE id = $id ";

	
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

}elseif(isset($_POST['start']) && isset($_POST['end']) && !isset($_POST['title'])){
    $user = $_SESSION['username'];
    $start =  new Datetime($_POST['start']);
    $end =  new Datetime($_POST['end']);
    $startD = $start->format('Y-m-d');
    $startD = $startD." "."06:00:00";
    $endD = $end->format('Y-m-d');
    $endD = $endD." "."00:00:00";

    $sql = "DELETE FROM staffevents WHERE user = '$user' AND start > '$startD' AND start < '$endD' ";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	    print_r($bdd->errorInfo());
	    die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	    print_r($query->errorInfo());
	    die ('Erreur execute');
	}

}
header('Location: index.php');


?>
