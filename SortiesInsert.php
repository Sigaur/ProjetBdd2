<?php
session_start();
include("db.php"); 


if (isset($_POST['update']))
{
	$temp = $_POST['update'];
	$CodT = $_POST['CodT'];
	$Numero = $_POST['Numero'];
	$Libelle = $_POST['Libelle'];
	$Km = $_POST['Km'];
	print("trace");

	query_database("UPDATE sorties SET CodT = \"$CodT\", Libelle = \"$Libelle\", Numero = $Numero, Km = $Km WHERE Libelle = \"$temp\"");
}
else
{
	$CodT = $_POST['CodT'];
	$Numero = $_POST['Numero'];
	$Libelle = $_POST['Libelle'];
	$Km = $_POST['Km'];

	query_database("INSERT INTO sorties VALUES(\"$CodT\",\"$Libelle\", $Numero, $Km)");
}

?> 

<script text="text/javascript"> 
alert("Sortie ajoutee !"); 
window.location.replace("index.php");

</script>