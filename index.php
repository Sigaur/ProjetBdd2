<!DOCTYPE html>
<html lang="fr">
<header>
	<h1>Gestion Autoroute</h1>
</header>

<body>
	<h3>Affichage</h3>
	Tronçons :
	<table style="width:100%">
	  <tr>
	    <th>Code Tronçon</th>
	    <th>Code Autoroute</th> 
	    <th>Début du Tronçon</th>	    
	    <th>Fin du Tronçon</th>
	  </tr>	
	<?php
		require_once('resetDB.php');
		require_once('myFunctions.php');
		$results_id = retrieve_troncons();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowTroncons($row['CodT'], $row['CodA'], $row['DuKm'], $row['AuKm']);
		}
	?>
	</table>
	<br><br>

	Sorties :
	<table style="width:100%">
	  <tr>
	    <th>Code Tronçon</th>
	    <th>Nom de la sortie</th> 
	    <th>Numéro de la Sortie</th>
	  </tr>	
	<?php
		$results_id = retrieve_sorties();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowSorties($row['CodT'], $row['Libelle'], $row['Numero']);
		}
	?>
	</table>
	<br><br>

	Villes :
	<table style="width:100%">
	  <tr>
	    <th>Nom de la ville</th>
	    <th>Code Postale de la Ville</th> 
	    <th>Nom de la sortie</th>
	    <th>Numéro de la sortie</th>
	  </tr>	
	<?php
		$results_id = retrieve_villes();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowVilles($row['Nom'], $row['CodP'], $row['Libelle'], $row['Numero']);
		}
	?>
	</table>
	<br><br>

	Péages :
	<table style="width:100%">
	  <tr>
	    <th>Nom du Péage</th>
	    <th>Code du Tronçons</th> 
	    <th>Début de la zone imposée</th>
	    <th>Fin de la zone imposée</th>
		<th>Tarif du Péage</th>
	  </tr>	
	<?php
		$results_id = retrieve_peages();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowVilles($row['Nom'], $row['CodT'], $row['PgDuKm'], $row['PgAuKm'], $row['Tarif']);
		}
	?>
	</table>
	<br><br>

	Choisissez ce que vous voulez remettre à zéro :
	<form action="" method="post">
		<input type="hidden"  name="reset" value="database">
		<input type="submit" value="Toute la base de données">
	</form>
	<form action="" method="post">
		<input type="hidden"  name="reset" value="peages">
		<input type="submit" value="Tous les Péages">
	</form>
	<form action="" method="post">
		<input type="hidden"  name="reset" value="registre">
		<input type="submit" value="Le registre">
	</form>
	<form action="" method="post">
		<input type="hidden"  name="reset" value="sca">
		<input type="submit" value="Toutes les Sociétées Concessionnaires d'Autoroutes">
	</form>
	<form action="" method="post">
		<input type="hidden"  name="reset" value="sorties">
		<input type="submit" value="Toutes les sorties">
	</form>
	<form action="" method="post">
		<input type="hidden"  name="reset" value="troncons">
		<input type="submit" value="Tous les tronçons">
	</form>
	<form action="" method="post">
		<input type="hidden"  name="reset" value="villes">
		<input type="submit" value="Toutes les villes">
	</form>
	<?php
	if (isset($_POST['reset']))
	{
		if($_POST['reset'] == 'database')
		{
			resetDB();
		}
		if($_POST['reset'] == 'peages')
		{
			resetPeages();
		}
		if($_POST['reset'] == 'registre')
		{
			resetRegistre();
		}
		if($_POST['reset'] == 'sca')
		{
			resetSca();
		}
		if($_POST['reset'] == 'sorties')
		{
			resetSorties();
		}
		if($_POST['reset'] == 'troncons')
		{
			resetTroncons();
		}
		if($_POST['reset'] == 'villes')
		{
			resetVilles();
		}
	}
	?>
</body>
