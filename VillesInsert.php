<?php
session_start();
include("db.php"); 

if (isset($_POST['update']))
{
	$temp = $_POST['update'];

	$Nom = $_POST['Nom'];
	$CodP = $_POST['CodP'];
	$Libelle = $_POST['Libelle'];
	$Numero = $_POST['Numero'];

	query_database("UPDATE Villes SET Nom = \"$Nom\", CodP = $CodP, Libelle = \"$Libelle\", Numero = $Numero WHERE Nom = \"$temp\"");
}
else
{
	$Nom = $_POST['Nom'];
	$CodP = $_POST['CodP'];
	$Libelle = $_POST['Libelle'];
	$Numero = $_POST['Numero'];

	query_database("INSERT INTO Villes VALUES(\"$Nom\", $CodP, \"$Libelle\", $Numero)");
}
?> 
<script text="text/javascript"> 
alert("Ville ajoutee !"); 
window.location.replace("index.php"); 
</script>