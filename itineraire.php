<?php 
	require_once('db.php');

	getItineraire("Marseille", "Rambouillet");

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

		$results_id = query_database("SELECT CodA FROM troncons JOIN sorties ON troncons.CodT = sorties.CodT WHERE sorties.libelle = \"$villeArrive\"");
		 print("<br>");
		
		$i = 0;
		while ($row = $results_id->fetch_assoc())
		{
			array_push($autorouteArrive, $row['CodA']);
			//print("$autorouteArrive[$i] <br>");			
			$i ++;
		}

		for($i = 0; $i < count($autorouteDepart); $i++)
		{
			for($j = 0; $j < count($autorouteArrive); $j++)
			{
				if($autorouteDepart[$i] == $autorouteArrive[$j])
				{
					print("$villeDepart -> $autorouteDepart[$i] -> $villeArrive");
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
										$k = count($autorouteArrive);
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
		
	}

 ?>