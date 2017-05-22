<?php
	try
	{
	$autoroute =new PDO('mysql:host=localhost;dbname=projetbdd2;charset=utf8', 'root', 'root');
	}
	
	catch(Exception $e)
	{
		die('Erreur :' .$e->getMessage());
	}
?>