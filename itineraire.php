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

	function getItineraire($villeDepart, $villeArrive)
	{
		print("Itineraire $villeDepart -> $villeArrive : <br>");

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
			print("La ville de départ n'est pas connectée au réseau d'autoroutes.");
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
			print("La ville d'arrivée n'est pas connectée au réseau d'autoroutes.");
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

		print("Pas d'itinéraire trouvés :");
		

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