<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=peacebr2_db;charset=utf8', 'peacebr2_user', 'dbuser');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
