<?php
session_start();
include("db.php"); 

if (isset($_POST['update']))
{
	$temp = $_POST['update'];

	$CodE = $_POST['CodE'];
	$Nom = $_POST['Nom'];
	$NomPeage = $_POST['NomPeage'];
	$CA = $_POST['CA'];
	$DateFin = $_POST['DateFin'];

	query_database("UPDATE Sca SET CodE = \"$CodE\", Nom = \"$Nom\", NomPeage = \"$NomPeage\", CA = $CA, DateFin = $DateFin WHERE CodE = \"$temp\"");
}
else
{
	$CodE = $_POST['CodE'];
	$Nom = $_POST['Nom'];
	$NomPeage = $_POST['NomPeage'];
	$CA = $_POST['CA'];
	$DateFin = $_POST['DateFin'];

	query_database("INSERT INTO Sca VALUES(\"$CodE\", \"$Nom\",\"$NomPeage\",$CA, $DateFin)");
}

?> 

<script text="text/javascript"> 
alert("Sca ajoutee !"); 
window.location.replace("index.php");

</script>