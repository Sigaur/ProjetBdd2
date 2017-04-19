<!DOCTYPE html>
<html lang="fr">
<header>
	<h1>Gestion Autoroute</h1>
</header>

<body>
	Voulez vous remettre à zéro :
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
	require_once('resetDB.php');
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
