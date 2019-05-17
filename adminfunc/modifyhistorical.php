<?php
include('..login_func/session.php');
require_once('../bdd.php');
session_start();

    $newmail = $_POST['fromemail'];

    $sql = "SELECT email from historicalemail";
    $query = $bdd->prepare($sql);
    $sth = $query->execute();
    class amail{
                public $email;
            }
    $result = $query->fetchAll(PDO::FETCH_CLASS,"amail");
    
    $em = $result[0]->email;
    
    $sql = "UPDATE historicalemail SET historicalemail.email = '$newmail' WHERE historicalemail.email = '$em'";
    $query = $bdd->prepare($sql);
    $sth = $query->execute();
    header('Location: '.$_SERVER['HTTP_REFERER']);
    
?>