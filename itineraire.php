	<!DOCTYPE html>
<html lang="fr">
<link href="itinerairebis.css" rel="stylesheet"type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('trajet.jpg');}</style>
<body>

	<div class="Section">		
		<h1 class="titre1">Votre Parcours</h1>
	</div>

	<div class="Stroll">
	<div class="sub">
		<a href="index.php"> 
			<input type="button" value="Retour" />	
		</a>
	</div>
	<div class="contenu">
<?php 
	require_once('db.php');

	$villeDepart = $_POST['NomD'];
	$villeArrive = $_POST['NomA'];

	getItineraire($villeDepart, $villeArrive);

	class Node 
	{
    	public $autoroute;
    	public $from;
    	public $ville;
	}

	function displayResultats($close, $tempAutoroute, $villeDepart, $villeArrive)
	{
		$resultats = "$villeDepart";
		$path = array();

		array_push($path, $villeArrive);
		array_push($path, $tempAutoroute);
		$temp = $tempAutoroute;

		/*
		for($i = 0; $i < count($close); $i++)
		{
			$tempNode = clone $close[$i];
			print("$tempNode->from -> $tempNode->ville -> $tempNode->autoroute <br>");
		}
		*/
		

		while($temp != 'start')
		{
			for($i = 0; $i < count($close); $i++)
			{
				$tempNode = clone $close[$i];
				if($tempNode->autoroute == $temp)
				{
					array_push($path, $tempNode->ville);
					array_push($path, $tempNode->from);
					$temp = $tempNode->from;
					$i = count($close);
				}
			}
		}

		for($i = count($path)-1; $i >= 0 ; $i--)
		{
			$temp = $path[$i];
			if("$temp" != "start")
			{
				if($i != 0)
				{
					print("$temp->");
				}
				else
				{
					print("$temp");
				}
					
			}
			
		}

	}

	function getItineraire($villeDepart, $villeArrive)
	{
		/*
		print("Itineraire $villeDepart -> $villeArrive : <br><br>");

		$tempNode = new Node();

		$autorouteDepart = array();
		$autorouteArrive = array();

		$open = array();
		$close = array();

		$results_id = query_database("SELECT CodA FROM troncons JOIN sorties ON troncons.CodT = sorties.CodT WHERE sorties.libelle = \"$villeDepart\"");

		$i = 0;
		
		while ($row = $results_id->fetch_assoc())
		{
			array_push($autorouteDepart, $row['CodA']);
			$tempNode->autoroute =  $row['CodA'];
			$tempNode->from = "start";

			array_push($open, $tempNode);
			//print("$autorouteDepart[$i] <br>");
			$i ++;
		}

		if(count($autorouteDepart) == 0)
		{
			print("La ville de depart n'est pas connectee au reseau d'autoroutes.");
			die();
		}

		$results_id = query_database("SELECT CodA FROM troncons JOIN sorties ON troncons.CodT = sorties.CodT WHERE sorties.libelle = \"$villeArrive\"");
		 print("<br>");
		
		$i = 0;
		while ($row = $results_id->fetch_assoc())
		{
			array_push($autorouteArrive, $row['CodA']);
			//print("$autorouteArrive[$i] <br>");			
			$i ++;
		}

		if(count($autorouteArrive) == 0)
		{
			print("La ville d'arrivee n'est pas connectee au reseau d'autoroutes.");
			die();
		}

		for($i = 0; $i < count($autorouteDepart); $i++)
		{
			for($j = 0; $j < count($autorouteArrive); $j++)
			{
				if($autorouteDepart[$i] == $autorouteArrive[$j])
				{
					print("$villeDepart -> $autorouteDepart[$i] -> $villeArrive");					
					print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
					die();
				}
			}
		}

		
		$i = 0;
		while($i < count($open))
		{
			for($j = 0; $j < count($open); $j++)
			{
				$temp = $open[$j]->autoroute;
				$results_id = query_database("SELECT sorties.libelle FROM sorties JOIN troncons ON sorties.CodT = troncons.CodT WHERE troncons.CodA = \"$temp\"");

				while ($row = $results_id->fetch_assoc())
				{
					$tempVille = $row['libelle'];
					if($tempVille != $villeDepart)
					{

						$results_id2 = query_database("SELECT troncons.CodA FROM troncons JOIN sorties ON sorties.CodT = troncons.CodT WHERE sorties.libelle = \"$tempVille\"");

						while ($row2 = $results_id2->fetch_assoc())
						{
							$tempAutoroute = $row['libelle'];
							if($tempAutoroute != $temp)
							{
								for($k = 0; $k < count($autorouteArrive); $k++)
								{
									if($tempAutoroute = $autorouteArrive[$k])
									{
										print("TEST : $villeDepart -> $temp -> $tempVille -> $tempAutoroute -> $villeArrive");
										print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
										die();
									}
								}
							}							
						}
					}		
				}
			}
			$i ++;
		}
		*/

		print("Itineraire $villeDepart -> $villeArrive : <br><br>");

		$tempNode = new Node();

		$autorouteDepart = array();
		$autorouteArrive = array();

		$villes = array();

		$open = array();
		$close = array();

		$results_id = query_database("SELECT CodA FROM troncons JOIN sorties ON troncons.CodT = sorties.CodT WHERE sorties.libelle = \"$villeDepart\"");

		$i = 0;
		
		while ($row = $results_id->fetch_assoc())
		{
			array_push($autorouteDepart, $row['CodA']);
			$tempNode->autoroute =  $row['CodA'];
			$tempNode->ville = $villeDepart;
			$tempNode->from = 'start';

			array_push($open, $tempNode);
			//array_push($close, $tempNode);
			$i ++;
		}

		if(count($autorouteDepart) == 0)
		{
			print("La ville de depart n'est pas connectee au reseau d'autoroutes.");
			die();
		}

		$results_id = query_database("SELECT CodA FROM troncons JOIN sorties ON troncons.CodT = sorties.CodT WHERE sorties.libelle = \"$villeArrive\"");
		 print("<br>");
		
		$i = 0;
		while ($row = $results_id->fetch_assoc())
		{
			array_push($autorouteArrive, $row['CodA']);
			//print("$autorouteArrive[$i] <br>");			
			$i ++;
		}

		if(count($autorouteArrive) == 0)
		{
			print("La ville d'arrivee n'est pas connectee au reseau d'autoroutes.");
			die();
		}

		for($i = 0; $i < count($autorouteDepart); $i++)
		{
			for($j = 0; $j < count($autorouteArrive); $j++)
			{
				if($autorouteDepart[$i] == $autorouteArrive[$j])
				{
					print("$villeDepart -> $autorouteDepart[$i] -> $villeArrive");					
					print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
					die();
				}
			}
		}

		$compt = 0;
		while($compt < count($open))
		{
			$tempNode = clone $open[$compt];
			$from = $tempNode->autoroute;
			
			$results_id = query_database("SELECT sorties.libelle FROM sorties JOIN troncons ON sorties.CodT = troncons.CodT WHERE troncons.CodA = \"$from\"");
			//print("<br>1 : $from<br>");
			unset($villes);
			$villes = array();

			while ($row = $results_id->fetch_assoc())
			{
				$tempVille = $row['libelle'];
				
				if($tempVille != $from)
				{					
					array_push($villes, $tempVille);
				}//print("2 : $tempVille<br>");
			}

			
			for ($i = 0; $i < count($villes); $i++)
			{
				$tempVille = $villes[$i];
				
				$results_id = query_database("SELECT troncons.CodA FROM troncons JOIN sorties ON sorties.CodT = troncons.CodT WHERE sorties.libelle = \"$tempVille\"");
				while ($row = $results_id->fetch_assoc())
				{
					$tempAutoroute = $row['CodA'];
					//print("3 : $tempAutoroute<br>");
					if($tempAutoroute != $from)
					{
						//Searching if $tempAutoroute is in close
						$isIn = 0;
						for ($j=0; $j < count($close); $j++) {
							$tempNode = clone $close[$j];
							if($tempAutoroute == $tempNode->autoroute)
							{
								$isIn = 1;
							}
						}
						//Searching if $tempAutoroute is in open
						for ($j=0; $j < count($open); $j++) {
							$tempNode = clone $open[$j];
							if($tempAutoroute == $tempNode->autoroute)
							{
								$isIn = 1;
							}
						}

						if ($isIn == 0) 
						{
							//print("$tempAutoroute");
							$tempNode->autoroute = $tempAutoroute;
							$tempNode->ville = $tempVille;
							$tempNode->from = $from;
							array_push($open, $tempNode);							
						}
					}
					
				}
			}


			

			$tempNode = clone $open[$compt];
			array_push($close, $tempNode);

			$temp2 = $tempNode->autoroute;

			
			if (in_array($temp2, $autorouteArrive)) 
			{
				//print("TEMPORAIRE : $temp2 <br>");
				/*
				for($i = 0; $i < count($close); $i++)
				{
					$tempNode = clone $close[$i];
					print("$tempNode->from -> $tempNode->ville -> $tempNode->autoroute <br>");
				}
				*/
				

				displayResultats($close, $temp2, $villeDepart, $villeArrive);
				die();
			}
			
			$compt ++;
			//unset($open[0]);
			//array_values($open);
		}
		
		print("Aucun chemins trouvés. Affichagte Débug des chemins trouvés par exploration :<br>");
		for($i = 0; $i < count($close); $i++)
		{
			$tempNode = clone $close[$i];

			print("$tempNode->from -> $tempNode->ville -> $tempNode->autoroute <br>");
		}

		/*
		$i = 0;
		while($i < count($open))
		{
			for($j = 0; $j < count($open); $j++)
			{
				$temp = $open[$j];
				$tempAutoroute = $temp->autoroute;
				$results_id = query_database("SELECT sorties.libelle FROM sorties JOIN troncons ON sorties.CodT = troncons.CodT WHERE troncons.CodA = \"$tempAutoroute\"");

				while ($row = $results_id->fetch_assoc())
				{
					$tempVille = $row['libelle'];
					if($tempVille != $villeDepart)
					{

						
					}		
				}
			}
			$i ++;

			$results_id2 = query_database("SELECT troncons.CodA FROM troncons JOIN sorties ON sorties.CodT = troncons.CodT WHERE sorties.libelle = \"$tempVille\"");

			while ($row2 = $results_id2->fetch_assoc())
			{
				$tempAutoroute = $row['CodA'];

				$isIn = 0;
				for($k = 0; $k < count($open); $k++)
				{
					$temp = $open[$k];
					if($temp->autoroute == $tempAutoroute)
					{
						$isIn = 1;
							//die();
						}
					}

					if($isIn == 0)
					{
						$tempNode->autoroute = $tempAutoroute;
						$tempNode->ville = $tempVille;
						$tempNode->from = $tempAutorouteDepart;

						array_push($open, $tempNode);
					}						
				}
			}
	
	
		$k = 0;

		$temp = count($open);
		print("<br><br>Debug : $temp");

		while($k < count($open))
		{
			$Noeux = $open[$k];
			$temp1 = $Noeux->from;
			$temp2 = $Noeux->ville;
			$temp3 = $Noeux->autoroute;
			print("test2$temp1 -> $temp2 -> $temp3 <br>");
			$k ++;
		}	
		*/		
	}
 ?>
 	</div>
	</div>
</body>
</html>