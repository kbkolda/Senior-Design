<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();


$_SESSION['selecteduser'] = $_POST['selecteduser'];// 

 $_SESSION['selectedchild'] ="";
 
header('Location: '.$_SERVER['HTTP_REFERER']);



?>