<?php
session_start();
include("db.php"); 


if (isset($_POST['update']))
{
	$temp = $_POST['update'];

	$CodT = $_POST['CodT'];
	$CodA = $_POST['CodA'];
	$CodE = $_POST['CodE'];
	$DuKm = $_POST['DuKm'];
	$AuKm = $_POST['AuKm'];

	query_database("UPDATE troncons SET CodT = \"$CodT\", CodA = \"$CodA\", CodE = \"$CodE\", DuKm = $DuKm, AuKm = $AuKm WHERE CodT = \"$temp\"");

}
else
{
	$CodT = $_POST['CodT'];
	$CodA = $_POST['CodA'];
	$CodA = $_POST['CodA'];
	$DuKm = $_POST['DuKm'];
	$AuKm = $_POST['AuKm'];

	query_database("INSERT INTO troncons VALUES(\"$CodT\", \"$CodA\", \"$CodE\", $DuKm, $AuKm)");
}


?> 
<script text="text/javascript"> 
alert("troncon ajoute !"); 
window.location.replace("index.php"); 
</script>