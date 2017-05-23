<!DOCTYPE html>
<html lang="fr">
<link href="view.css" rel="stylesheet"type="text/css">

<body>
<h1 class="title">Gestion Autoroute</h1>
	<div class="bandeau">
		<h6 class="title2">Affichage</h6>
	</div>

	<h2 class="titrecontenu"> Tronçons </h2>	
	<div class="Stroll">
		<div class="milieu">
		<form action="AddTroncons.php" method="post">
			<input type="submit" value="ajouter">
		</form>
			<table class="c3">
	    	<th>Code Tronçon</th>
	    	<th>Code Autoroute</th> 
	    	<th>Début du Tronçon</th>	    
	    	<th>Fin du Tronçon</th>
	    	<th>   </th>
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
		<div class="milieu">
		<form action="AddSorties.php" method="post">
				<input type="submit" value="ajouter">
			</form>		
	<table class="c3">
	  <tr>
	    <th>Code Tronçon</th>
	    <th>Nom de la sortie</th> 
	    <th>Numéro de la Sortie</th>
	    <th>   </th>
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
		<div class="milieu">
	<form action="AddVilles.php" method="post">
				<input type="submit" value="ajouter">
			</form>
	<table class="c3">
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
	</div>	
	</div>
	<br><br>
	<h2 class="titrecontenu">Péages </h2>	
	<div class="Stroll">
		<div class="milieu">
		<form action="AddPeages.php" method="post">
				<input type="submit" value="ajouter">
			</form>
			
	 <table class="c3">
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
	</div>	
		</div>
	<br><br>
<h2 class="titrecontenu">SCA </h2>	
	<div class="Stroll">
		<div class="milieu">
	<form action="AddSca.php" method="post">
				<input type="submit" value="ajouter">
			</form>
	<table class="c3">
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
	</div>	
		</div>
	<br><br>
<h2 class="titrecontenu">Registre Fermetures </h2>	
	<div class="Stroll">
		<div class="milieu">
	<form action="AddRegistre.php" method="post">
				<input type="submit" value="ajouter">
			</form>
	<table class="c3">
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
	</div>	
		</div>
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
	</trbgcolor="#27E98E">
	</table
	</div>
	</div>
</body>
