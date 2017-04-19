<?php
	function query_database($SQLCmd)
	{
		$mysqli = new mysqli('localhost', 'efrei', 'efrei123', 'projetbdd2');

		if ($mysqli->connect_errno)
		{
			die("Error connecting to the database.");

		}
		else
		{
			//print("Database connection succeeded!<br><br>");
		}

		$results_id = $mysqli->query($SQLCmd);
		$mysqli->close();

		return $results_id;
	}

	function retrieve_troncons()
	{
		$SQLCmd = 'SELECT * FROM troncons';
		return query_database($SQLCmd);
	}

	function retrieve_sorties()
	{
		$SQLCmd = 'SELECT * FROM sorties';
		return query_database($SQLCmd);
	}

	function retrieve_villes()
	{
		$SQLCmd = 'SELECT * FROM villes';
		return query_database($SQLCmd);
	}

	function retrieve_peages()
	{
		$SQLCmd = 'SELECT * FROM peages';
		return query_database($SQLCmd);
	}

	function retrieve_sca()
	{
		$SQLCmd = 'SELECT * FROM sca';
		return query_database($SQLCmd);
	}

	function retrieve_registre()
	{
		$SQLCmd = 'SELECT * FROM registre';
		return query_database($SQLCmd);
	}
?>