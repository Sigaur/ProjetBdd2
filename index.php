<!DOCTYPE html>
<html lang="fr">
<link href="view.css" rel="stylesheet"type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<body>
<h1 class="title">Gestion Autoroute</h1>
	<div class="bandeau">
		<h6 class="title2">Affichage</h6>
	</div>

	<h2 class="titrecontenu"> Troncons </h2>	
	<div class="Stroll">
		
		<div class="sub">
		<form action="AddTroncons.php" method="post">
			<input type="submit" value="Ajouter">
		</form>
		</div>
		<div class="milieu">
			<table>
	    	<th>Code Troncon</th>
	    	<th>Code Autoroute</th> 
	    	<th>Debut du Troncon</th>	    
	    	<th>Fin du Troncon</th>
			<th>Modification</th>
			<th>Suppression</th>
	  		</tr>
		

	
	<?php
		//require_once('resetDB.php');
		require_once('controlleur.php');
		$results_id = retrieve_troncons();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowTroncons($row['CodT'], $row['CodA'], $row['DuKm'], $row['AuKm']);
		}
	?>
	</table>
	</div>	
		</div>
	<br><br>
	<h3 class="titrecontenu"> Sorties </h3>	
	<div class="Stroll">
	<div class="sub">
			<form action="AddSorties.php" method="post">
				<input type="submit" value="Ajouter">
			</form>	
	</div>
	<div class="milieu">
	<table>
	  <tr>
	    <th>Code Troncon</th>
	    <th>Nom de la sortie</th> 
	    <th>Numero de la Sortie</th>
		<th>Modification</th>
	    <th>Suppression</th>
	  </tr>	
		

	
	<?php
		$results_id = retrieve_sorties();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowSorties($row['CodT'], $row['Libelle'], $row['Numero']);
		}
	?>
	</table>
	</div>	
		</div>
	<br><br>
	<h2 class="titrecontenu"> Villes </h2>	
	<div class="Stroll">
	<div class="sub">
	<form action="AddVilles.php" method="post">
				<input type="submit" value="Ajouter">
			</form>
	</div>
	<div class="milieu">
	<table>
	  <tr>
	    <th>Nom de la ville</th>
	    <th>Code Postale de la Ville</th> 
	    <th>Nom de la sortie</th>
	    <th>Numero de la sortie</th>
		<th>Modification</th>
		<th>Suppression</th>
	  </tr>	
		
	
	<?php
		$results_id = retrieve_villes();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowVilles($row['Nom'], $row['CodP'], $row['Libelle'], $row['Numero']);
		}
	?>
	</table>
	</div>	
	</div>
	<br><br>
	<h2 class="titrecontenu">Peages </h2>	
	<div class="Stroll">
	<div class="sub">
		<form action="AddPeages.php" method="post">
		<input type="submit" value="Ajouter">
		</form>
	</div>
	<div class="milieu">
	 <table>
	  <tr>
	    <th>Nom du Peage</th>
	    <th>Code du Troncons</th> 
	    <th>Debut de la zone imposee</th>
	    <th>Fin de la zone imposee</th>
		<th>Tarif du Peage</th>
		<th>Modification</th>
		<th>Suppression</th>
	  </tr>	
		
	
	
	<?php
		$results_id = retrieve_peages();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowVilles($row['Nom'], $row['CodT'], $row['PgDuKm'], $row['PgAuKm'], $row['Tarif']);
		}
	?>
	</table>
	</div>	
</div>
	<br><br>
<h2 class="titrecontenu">SCA </h2>	
	<div class="Stroll">
	<div class="sub">
	<form action="AddSca.php" method="post">
				<input type="submit" value="Ajouter">
			</form>
		</div>
	<div class="milieu">
	<table>
	  <tr>
	    <th>Code Entreprise</th>
	    <th>Nom Entreprise</th> 
	    <th>Nom Peage gere</th>
	    <th>Chiffre d'affaire</th>
		<th>Duree avant fin de contrat (jours)</th>
		<th>Modification</th>
		<th>Suppression</th>
	  </tr>	
	
	<?php
		$results_id = retrieve_sca();
		while ($row = $results_id->fetch_assoc())
		{
			printTableRowSca($row['CodE'], $row['Nom'], $row['NomPeage'], $row['CA'], $row['DateFin']);
		}
	?>
	</table>
	</div>	
		</div>
	<br><br>
<h2 class="titrecontenu">Registre Fermetures </h2>	
	<div class="Stroll">
		
	<div class="sub">
			<form action="AddRegistre.php" method="post">
				<input type="submit" value="Ajouter">
			</form>
	</div>
	<div class="milieu">
	<table>
	  <tr>
	    <th>Code Troncons</th>
	    <th>ID Registre</th> 
	    <th>Descriptif de la fermeture</th>
	    <th>Date Debut</th>
		<th>Date Fin</th>
		<th>Modification</th>
		<th>Suppression</th>
	  </tr>	
		
	
	<?php
		$results_id = retrieve_registre();
		//while ($row = $results_id->fetch_assoc())
		{
			//printTableRowRegistre($row['CodT'], $row['IdRegistre'], $row['Descriptif'], $row['DateDebut'], $row['DateFin']);
		}
	?>
	</table>
	</div>	
	</div>
	<br><br>

	
	
	
	
	<h2 class="titrecontenu">Options </h2>	
	<div class="Stroll">	
	<div class="sub">
		<form action="interfaceItineraire.php" method="post">
			<input type="submit" value="Nouvel itineraire">
		</form>
	</div>
	<div class="instructions">
		<p>Choisissez ce que vous voulez remettre a zero : </p>
	
	<div class= milieu>
	<table>
	<tr class= "options">
	    <td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="database">
				<input type="submit" value="Toute la base de donnees">
			</form>
		</td> 
	    <td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="registre">
			<input type="submit" value="Le registre">
			</form>
		</td>
	    <td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="registre">
				<input type="submit" value="Le registre">
			</form>
		</td>
		<td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="sca">
			<input type="submit" value="Tous Concessionnaires">
			</form>
		</td>
	</tr>	
	<tr>
		<td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="sorties">
				<input type="submit" value="Toutes les sorties">
			</form>
		</td>
		<td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="troncons">
				<input type="submit" value="Tous les troncons">
			</form>
		</td>
		<td>
			<form action="controlleur.php" method="post">
				<input type="hidden"  name="reset" value="villes">
				<input type="submit" value="Toutes les villes">
			</form>
		</td>
	</tr>
	
	<?php
		$results_id = retrieve_registre();
		//while ($row = $results_id->fetch_assoc())
		{
			//printTableRowRegistre($row['CodT'], $row['IdRegistre'], $row['Descriptif'], $row['DateDebut'], $row['DateFin']);
		}
	?>
	</table>
	</div>
	</div>
	</div>

</body>
