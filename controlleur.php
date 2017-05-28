<?php
require_once('resetDB.php');
require_once('db.php');

	if (isset($_POST['reset']))
	{
		if($_POST['reset'] == 'database')
		{
			resetDB();
			//print("Base de données remise à zero");
			echo '<script text="text/javascript"> 
			alert("Base de donnees remise a zero !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
		}
		if($_POST['reset'] == 'peages')
		{
			resetPeages();
			//print("Péages remis à zero");
			/*<script text="text/javascript"> 
			alert("Peages remis a zero"); 
			window.location.replace("index.php"); 
			</script>*/
		}
		if($_POST['reset'] == 'registre')
		{
			resetRegistre();
			//print("Registre remis a zero");
			echo '<script text="text/javascript"> 
			alert("Registres remis a zero !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
		}
		if($_POST['reset'] == 'sca')
		{
			resetSca();	
			//print("Sca remis à zero");
			echo '<script text="text/javascript"> 
			alert("Sca remis a zero !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
		}
		
		if($_POST['reset'] == 'sorties')
		{
			resetSorties();
			//print("Sorties remises à zero");
			echo '<script text="text/javascript"> 
			alert("Sorties remises a zero !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
		}
		if($_POST['reset'] == 'troncons')
		{
			resetTroncons();

			//print("Tronçons remis à zero");
			echo '<script text="text/javascript"> 
			alert("Troncons remis a zero !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
		}
		if($_POST['reset'] == 'villes')
		{
			resetVilles();
			//print("Villes remises à zero");
			echo '<script text="text/javascript"> 
			alert("Villes remises a zero !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
		}
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
	}

	if (isset($_POST['troncon']))
	{
		$temp = $_POST['troncon'];
		delete_troncon($temp);
		//print("<br>tronçon $temp supprimé");
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
			echo '<script text="text/javascript"> 
			alert("Troncon supprime!"); 
			window.location.replace("index.php"); 
			</script>'."\n";
	}

	if (isset($_POST['sortie']))
	{
		$temp = $_POST['sortie'];
		delete_sortie($temp);
		//print("<br>Sortie $temp supprimé");
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
			echo '<script text="text/javascript"> 
			alert("Sortie Supprime!"); 
			window.location.replace("index.php"); 
			</script>'."\n";
	}

	if (isset($_POST['ville']))
	{
		$temp = $_POST['ville'];
		delete_ville($temp);
		//print("<br>Ville $temp supprimée");
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
			echo '<script text="text/javascript"> 
			alert("Ville supprimee!"); 
			window.location.replace("index.php"); 
			</script>'."\n";
	}

	if (isset($_POST['peage']))
	{
		$temp = $_POST['peage'];
		delete_peage($temp);
		//print("<br>Peage $temp supprimé");
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
			echo '<script text="text/javascript"> 
			alert("Peage Supprime !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
	}

	if (isset($_POST['sca']))
	{
		$temp = $_POST['sca'];
		delete_sca($temp);
		//print("<br>Sca $temp supprimé");
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
			echo '<script text="text/javascript"> 
			alert("Sca Supprimee !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
	}

	if (isset($_POST['registre']))
	{
		$temp = $_POST['registre'];
		delete_registre($temp);
		//print("<br>Registre $temp supprimé");
		//print("<br><br><a href='index.php'>Revenir au Menu Principal</a>");
			echo '<script text="text/javascript"> 
			alert("Registre Supprime !"); 
			window.location.replace("index.php"); 
			</script>'."\n";
	}




function printTableRowTroncons($CodT, $CodA, $DuKm, $AuKm)
{
	print("<tr>
	    <td>$CodT</td>
	    <td>$CodA</td> 
	    <td>$DuKm</td>
	    <td>$AuKm</td>
		<td>
	    	<form action='AddTroncons.php' method='post'>
			<input type='hidden' name='update' value='$CodT'>
			<button type='Submit'>Modifier
			</button>
			</form>
		</td>
	    <td>
	    	<form action='controlleur.php' method='post'>
			<input type='hidden' name='troncon' value='$CodT'>
			<button type='Submit'>Supprimer
			</button>
			</form>
		</td>
	  	</tr>"
	  	);
}
//class='btn btn-primary btn-block buttonWhite

function printTableRowSorties($CodT, $Libelle, $Numero)
{
	print("<tr>
	    <td>$CodT</td>
	    <td>$Libelle</td> 
	    <td>$Numero</td>
		<td>
	    	<form action='AddSorties.php' method='post'>
			<input type='hidden' name='update' value='$Libelle'>
			<button type='Submit'>Modifier
			</button>
			</form>
		</td>
	    <td>
	    	<form action='controlleur.php' method='post'>
			<input type='hidden' name='sortie' value='$Libelle'>
			<button type='Submit'>Supprimer
			</button>
			</form>
		</td>
	  	</tr>"
	  	);
}

function printTableRowVilles($Nom, $CodP, $Libelle, $Numero)
{
	print("<tr>
	    <td>$Nom</td>
	    <td>$CodP</td>
	    <td>$Libelle</td>
	    <td>$Numero</td>
	    <td>
	    	<form action='AddVilles.php' method='post'>
			<input type='hidden' name='update' value='$Nom'>
			<button type='Submit'>Modifier
			</button>
			</form>
		</td>
	    <td>
	    	<form action='controlleur.php' method='post'>
			<input type='hidden' name='ville' value='$Nom'>
			<button type='Submit'>Supprimer
			</button>
			</form>
		</td>
	  	</tr>"
	  	);
}

function printTableRowPeages($Nom, $CodT, $PgDuKm, $PgAuKm, $Tarif)
{
	print("<tr>
	    <td>$Nom</td>
	    <td>$CodT</td>
	    <td>$PgDuKm</td>
	    <td>$PgAuKm</td>
	    <td>$Tarif</td>
		<td>
	    	<form action='AddPeages.php' method='post'>
			<input type='hidden' name='update' value='$Nom'>
			<button type='Submit'>Modifier
			</button>
			</form>
		</td>
	    <td>
	    	<form action='controlleur.php' method='post'>
			<input type='hidden' name='peage' value='$Nom'>
			<button type='Submit'>Supprimer
			</button>
			</form>
		</td>
	  	</tr>"
	  	);
}

function printTableRowSca($CodE, $Nom, $NomPeage, $CA, $DateFin)
{
	print("<tr>
	    <td>$CodE</td>
	    <td>$Nom</td>
	    <td>$NomPeage</td>
	    <td>$CA</td>
	    <td>$DateFin</td>
		<td>
	    	<form action='AddSca.php' method='post'>
			<input type='hidden' name='update' value='$CodE'>
			<button type='Submit'>Modifier
			</button>
			</form>
		</td>
	    <td>
	    	<form action='controlleur.php' method='post'>
			<input type='hidden' name='sca' value='$CodE'>
			<button type='Submit'>Supprimer
			</button>
			</form>
		</td>
	  	</tr>"
	  	);
}

function printTableRowRegistre($CodT, $IdRegistre, $Descriptif, $DateDebut, $DateFin)
{
	print("<tr>
	    <td>$CodT</td>
	    <td>$IdRegistre</td>
	    <td>$Descriptif</td>
	    <td>$DateDebut</td>
	    <td>$DateFin</td>
		<td>
	    	<form action='AddRegistre.php' method='post'>
			<input type='hidden' name='update' value='$IdRegistre'>
			<button type='Submit'>Modifier
			</button>
			</form>
		</td>
	    <td>
	    	<form action='controlleur.php' method='post'>
			<input type='hidden' name='registre' value='$IdRegistre'>
			<button type='Submit'>Supprimer
			</button>
			</form>
		</td>
	  	</tr>"
	  	);
}

?>