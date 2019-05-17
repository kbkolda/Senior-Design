<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();


$_SESSION['selectedchild'] = $_POST['selectedchild'];// 


header('Location: '.$_SERVER['HTTP_REFERER']);



?>