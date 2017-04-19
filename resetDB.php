<?php
	require_once('db.php');
	function resetDB()
	{

		resetPeages();
		resetRegistre();
		resetSca();
		resetSorties();
		resetTroncons();
		resetVilles();
	}

	function resetPeages()
	{		
		query_database("DROP TABLE IF EXISTS peages");
		query_database("CREATE TABLE peages(	Nom VARCHAR(100), 
												CodT VARCHAR(10), 
												PgDuKm INT, 
												PgAuKm INT, 
												Tarif FLOAT)");

		query_database("INSERT INTO peages VALUES('PAYE PIGEON', 
												'T3', 
												0,
												10,
												12.50)");
	}

	function resetRegistre()
	{
		query_database("DROP TABLE IF EXISTS registre");
		query_database("CREATE TABLE registre(	CodT VARCHAR(10), 
												IdRegistre INT, 
												Descriptif VARCHAR(500), 
												DateDebut INT, 
												DateFin INT)");
	}

	function resetSca()
	{
		query_database("DROP TABLE IF EXISTS sca");
		query_database("CREATE TABLE sca(		CodT VARCHAR(10), 
												CodE VARCHAR(10), 
												Nom VARCHAR(100), 
												CA INT, 
												DateFin INT)");
	}

	function resetSorties()
	{
		query_database("DROP TABLE IF EXISTS sorties");
		query_database("CREATE TABLE sorties(	CodT VARCHAR(10), 
												Libelle VARCHAR(100), 
												Numero INT)");
		query_database("INSERT INTO sorties VALUES(	2, 
												'Rambouillet', 
												1)");
	}

	function resetTroncons()
	{
		query_database("DROP TABLE IF EXISTS troncons");
		query_database("CREATE TABLE troncons(	CodT VARCHAR(10), 
												CodA VARCHAR(10), 
												DuKm INT, 
												AuKm INT)");

		query_database("INSERT INTO troncons VALUES('T1', 
												'A6', 
												0, 
												10)");
		query_database("INSERT INTO troncons VALUES('T2', 
												'A6', 
												10, 
												25)");
		query_database("INSERT INTO troncons VALUES('T3', 
												'A10', 
												0, 
												40)");
	}

	function resetVilles()
	{
		query_database("DROP TABLE IF EXISTS villes");
		query_database("CREATE TABLE villes(	Libelle VARCHAR(100), 
												Numero INT, 
												CodP INT, 
												Nom VARCHAR(100))");

		query_database("INSERT INTO villes VALUES('Rambouillet', 
												1, 
												65000, 
												'Rambouillet')");
	}
	
?>