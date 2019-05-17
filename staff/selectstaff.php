<?php
include('../login_func/session.php');
require_once('../bdd.php');
session_start();





$_SESSION['selectedstaff'] = $_POST['staffmember'];// 


header('Location: '.$_SERVER['HTTP_REFERER']);



?>