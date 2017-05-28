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
												CodE VARCHAR(10),
												PgDuKm INT, 
												PgAuKm INT, 
												Tarif DECIMAL(5,2))");

		query_database("INSERT INTO peages VALUES('Saint Arnoux', 
												'T3',
												'E1',
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

		query_database("INSERT INTO registre VALUES(	'T1',
														01,
														'Travaux en cours', 
														24022017,
														10082017)");
		query_database("INSERT INTO registre VALUES(	'T2',
														02,
														'Changement bande centrale', 
														11112016,
														18042017)");
	}

	function resetSca()
	{
		query_database("DROP TABLE IF EXISTS sca");
		query_database("CREATE TABLE sca(		CodE VARCHAR(10), 
												Nom VARCHAR(100),
												CA INT, 
												DateFin INT)");

		query_database("INSERT INTO sca VALUES(	'E1', 
												'APPR',
												1662,
												18082017)");
		query_database("INSERT INTO sca VALUES(	'E2', 
												'ASF',
												2796,
												10102017)");
		query_database("INSERT INTO sca VALUES(	'E3', 
												'Cofiroute',
												1306,
												25052017)");	


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
												CodE VARCHAR(10),
												DuKm INT, 
												AuKm INT)");

		query_database("INSERT INTO troncons VALUES('T1', 
												'A6',
												'E1', 
												0, 
												10)");
		query_database("INSERT INTO troncons VALUES('T2', 
												'A6',
												'E1', 
												10, 
												25)");
		query_database("INSERT INTO troncons VALUES('T3', 
												'A10',
												'E2', 
												0, 
												40)");

		query_database("INSERT INTO troncons VALUES('T4', 
 											'A7',
 											'E3',
 											0, 
 											40)");
 	query_database("INSERT INTO troncons VALUES('T5', 
 											'A7',
 											'E3', 
 											40, 
 											100)");
 	query_database("INSERT INTO troncons VALUES('T6', 
 											'A7',
 											'E3', 
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