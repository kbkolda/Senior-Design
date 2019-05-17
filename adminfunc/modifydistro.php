<?php
include('..login_func/session.php');
require_once('../bdd.php');
session_start();

    $pw = $_POST['frompass'];
    $newmail = $_POST['fromemail'];

    $sql = "SELECT email from distro";
    $query = $bdd->prepare($sql);
    $sth = $query->execute();
    class amail{
                public $email;
                public $password;
            }
    $result = $query->fetchAll(PDO::FETCH_CLASS,"amail");
    
    $em = $result[0]->email;
    
    
    
    
    $sql = "UPDATE distro SET distro.email = '$newmail',distro.password = '$pw'  WHERE distro.email = '$em'";
    $query = $bdd->prepare($sql);
    $sth = $query->execute();
    header('Location: modifyFrom');
    
?>