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
												Tarif DECIMAL(3,3))");

		query_database("INSERT INTO peages VALUES('Saint Arnoux', 
												'T3', 
												0,
												10,
												12.00)");
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
		query_database("CREATE TABLE sca(		CodE VARCHAR(10), 
												Nom VARCHAR(100), 
												NomPeage VARCHAR(10),
												CA INT, 
												DateFin INT)");
	}

	function resetSorties()
	{
		query_database("DROP TABLE IF EXISTS sorties");
		query_database("CREATE TABLE sorties(	CodT VARCHAR(10), 
												Libelle VARCHAR(100), 
												Numero INT,
 												Km INT)");
 	
 	query_database("INSERT INTO sorties VALUES(	'T1', 
 											'Rambouillet', 
 											1,
 											9)");

 	query_database("INSERT INTO sorties VALUES(	'T2', 
 											'Paris', 
 											2,
 											25)");

 	query_database("INSERT INTO sorties VALUES(	'T4', 
 											'Paris', 
 											2,
 											20)");

 	query_database("INSERT INTO sorties VALUES(	'T6', 
 											'Marseille', 
 											3,
 											150)");
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

		query_database("INSERT INTO troncons VALUES('T4', 
 											'A7', 
 											0, 
 											40)");
 	query_database("INSERT INTO troncons VALUES('T5', 
 											'A7', 
 											40, 
 											100)");
 	query_database("INSERT INTO troncons VALUES('T6', 
 											'A7', 
 											100, 
												160)");
	}

	function resetVilles()
	{
		query_database("DROP TABLE IF EXISTS villes");
		query_database("CREATE TABLE villes(	Nom VARCHAR(100),
												CodP INT, 
												Libelle VARCHAR(100), 
												Numero INT)");

		query_database("INSERT INTO villes VALUES('Rambouillet', 
												65000, 
												'Rambouillet', 
												1)");

		query_database("INSERT INTO villes VALUES('Paris', 
 												75000, 
 										'Paris', 
 											2)");

 	query_database("INSERT INTO villes VALUES('Marseille', 
 											13000, 
 											'Marseille', 
 											3)");
	}
	
?>