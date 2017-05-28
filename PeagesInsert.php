<?php
session_start();
include("db.php");

if (isset($_POST['update']))
{
	$temp = $_POST['update'];

	$Nom = $_POST['Nom'];
	$CodT = $_POST['CodT'];
	$CodE = $_POST['CodE'];
	$PgDuKm = $_POST['PgDuKm'];
	$PgAuKm = $_POST['PgAuKm'];
	$Tarif = $_POST['Tarif'];

	query_database("UPDATE peages SET Nom = \"$Nom\", CodT = \"$CodT\", CodE = \"$CodE\", PgDuKm = $PgDuKm, PgAuKm = $PgAuKm, Tarif = $Tarif WHERE Nom = \"$temp\"");
}
else
{
	$Nom = $_POST['Nom'];
	$CodT = $_POST['CodT'];
	$CodE = $_POST['CodE'];
	$PgDuKm = $_POST['PgDuKm'];
	$PgAuKm = $_POST['PgAuKm'];
	$Tarif = $_POST['Tarif'];

	query_database("INSERT INTO peages VALUES(\"$Nom\",\"$CodT\", \"$CodE\", $PgDuKm, $PgAuKm, $Tarif)");
}



?> 

<script text="text/javascript"> 
alert("Péage ajouté !"); 
window.location.replace("index.php");

</script>