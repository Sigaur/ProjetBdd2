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

	function delete_troncon($CodT)
	{
		query_database("DELETE FROM troncons WHERE CodT=\"$CodT\"");
	}

	function retrieve_sorties()
	{
		$SQLCmd = 'SELECT * FROM sorties';
		return query_database($SQLCmd);
	}

	function delete_sortie($Libelle)
	{
		query_database("DELETE FROM sorties WHERE Libelle=\"$Libelle\"");
	}

	function retrieve_villes()
	{
		$SQLCmd = 'SELECT * FROM villes';
		return query_database($SQLCmd);
	}

	function delete_ville($Nom)
	{
		query_database("DELETE FROM villes WHERE Nom=\"$Nom\"");
	}

	function retrieve_peages()
	{
		$SQLCmd = 'SELECT * FROM peages';
		return query_database($SQLCmd);
	}

	function delete_peage($Nom)
	{
		query_database("DELETE FROM peage WHERE Nom=\"$Nom\"");
	}

	function retrieve_sca()
	{
		$SQLCmd = 'SELECT * FROM sca';
		return query_database($SQLCmd);
	}

	function delete_sca($CodE)
	{
		query_database("DELETE FROM sca WHERE CodE=\"$CodE\"");
	}

	function retrieve_registre()
	{
		$SQLCmd = "SELECT * FROM registre";
		return query_database($SQLCmd);
	}

	function delete_registre($IdRegistre)
	{
		query_database("DELETE FROM registre WHERE IdRegistre=\"$IdRegistre\"");
	}
?>