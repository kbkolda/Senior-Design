<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();


$ublock = $_POST['removeeventdate'];
$sql = "SELECT id,start from events";
    $sth = $bdd->prepare($sql);
    $sth->execute();
    class Dates {
        public $id;
        public $start;
                }
    $result = $sth->fetchAll(PDO::FETCH_CLASS,"Dates");
    $banresult = array();
    $idlist = array();
    foreach($result as $row)
    {
        $ynd = explode(' ',$row->start);
        $row->start = date( "Y-m-d", strtotime($ynd[0]));
        $row->start = str_replace(' ', '', $row->start);
        array_push($banresult,$row);
        if(strcmp($ublock,$row->start)==0)
        {
            array_push($idlist,$row->id);
        }
    }
    
    
    
    foreach($idlist as $id)
    {
        $sql = "DELETE FROM events where id = '$id'";
        $sth = $bdd->prepare($sql);
        $sth->execute();
    }


$sql = "SELECT id,start from staffevents";
    $sth = $bdd->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_CLASS,"Dates");
    $banresult = array();
    $idlist = array();
    foreach($result as $row)
    {
        $ynd = explode(' ',$row->start);
        $row->start = date( "Y-m-d", strtotime($ynd[0]));
        $row->start = str_replace(' ', '', $row->start);
        array_push($banresult,$row);
        if(strcmp($ublock,$row->start)==0)
        {
            array_push($idlist,$row->id);
        }
    }
    
    
    
    foreach($idlist as $id)
    {
        $sql = "DELETE FROM staffevents where id = '$id'";
        $sth = $bdd->prepare($sql);
        $sth->execute();
    }

header('Location: '.$_SERVER['HTTP_REFERER']);

?>