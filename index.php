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
	    <th>   </th>
	  </tr>
	<?php
		require_once('controlleur.php');
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
	    <th>Au Km</th>
	    <th>   </th>
	  </tr>	
	<?php
		$results_id = retrieve_sorties();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowSorties($row['CodT'], $row['Libelle'], $row['Numero'], $row['Km']);
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
	    <th>   </th>
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
		<th>   </th>
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

	SCA :
	<table style="width:100%">
	  <tr>
	    <th>Code Entreprise</th>
	    <th>Nom Entreprise</th> 
	    <th>Nom Peage géré</th>
	    <th>Chiffre d'affaire</th>
		<th>Durée avant fin de contrat (jours)</th>
		<th>   </th>
	  </tr>	
	<?php
		$results_id = retrieve_peages();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowSca($row['CodE'], $row['Nom'], $row['NomPeage'], $row['CA'], $row['DateFin']);
		}
	?>
	</table>
	<br><br>

	Registre Fermetures :
	<table style="width:100%">
	  <tr>
	    <th>Code Troncons</th>
	    <th>ID Registre</th> 
	    <th>Descriptif de la fermeture</th>
	    <th>Date Debut</th>
		<th>Date Fin</th>
		<th>   </th>
	  </tr>	
	<?php
		$results_id = retrieve_peages();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowRegistre($row['CodT'], $row['IdRegistre'], $row['Descriptif'], $row['DateDebut'], $row['DateFin']);
		}
	?>
	</table>
	<br><br>

	Choisissez ce que vous voulez remettre à zéro :
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="database">
		<input type="submit" value="Toute la base de données">
	</form>
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="peages">
		<input type="submit" value="Tous les Péages">
	</form>
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="registre">
		<input type="submit" value="Le registre">
	</form>
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="sca">
		<input type="submit" value="Toutes les Sociétées Concessionnaires d'Autoroutes">
	</form>
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="sorties">
		<input type="submit" value="Toutes les sorties">
	</form>
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="troncons">
		<input type="submit" value="Tous les tronçons">
	</form>
	<form action="controlleur.php" method="post">
		<input type="hidden"  name="reset" value="villes">
		<input type="submit" value="Toutes les villes">
	</form>
	
</body>
