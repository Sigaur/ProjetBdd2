<!DOCTYPE html>
<html lang="fr">
<link href="itinerairebis.css" rel="stylesheet"type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('trajet.jpg');}</style>
<body>

	<div class="Section">		
		<h1 class="titre1">Affichage SCA
		</h1>
	</div>

	<div class="Stroll">
	<div class="sub">
		<a href="index.php"> 
			<input type="button" value="Retour" />	
		</a>
	</div>
	<div class="contenu">

<?php
	require_once('db.php');
	
	$CodE = $_POST['sca'];

	$results_id = query_database("SELECT Nom FROM sca WHERE CodE = \"$CodE\"");
	
	$row = $results_id->fetch_assoc();
	$nom = $row['Nom'];
	print("Nom de la SCA : $nom <br>");

	$results_id = query_database("SELECT DateFin FROM sca WHERE CodE = \"$CodE\"");
	
	$row = $results_id->fetch_assoc();
	$nom = $row['DateFin'];
	print("Date de fin de contrat : $nom <br>");
	

	$results_id = query_database("SELECT CodT FROM troncons WHERE CodE = \"$CodE\"");
	if(!is_bool($results_id))
	{
		print("<br>Tronçons gérés par $nom : <br><br>");
		while($row = $results_id->fetch_assoc())
		{
			$temp = $row['CodT'];
			print("$temp ");
		}
		print("<br>");
	}
	else
	{
		print("$nom ne Gère aucun tronçons");
	}


	$results_id = query_database("SELECT Tarif FROM peages WHERE CodE = \"$CodE\"");
	if(!is_bool($results_id))
	{
		$gain = 0;
		print("
		<br>Gain pour 100 véhicules : ");
		while($row = $results_id->fetch_assoc())
		{
			$temp = $row['Tarif'];
			$gain += $temp;
		}
		$gain *= 100;
		print("$gain €");
	}
	else
	{
		print("$nom ne Gère aucun péages");
	}
	



?>

</body>