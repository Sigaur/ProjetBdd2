<?php
session_start();
include("db.php"); 

if (isset($_POST['update']))
{
	$temp = $_POST['update'];

	$CodE = $_POST['CodE'];
	$Nom = $_POST['Nom'];
	$CA = $_POST['CA'];
	$DateFin = $_POST['DateFin'];

	query_database("UPDATE Sca SET CodE = \"$CodE\", Nom = \"$Nom\", CA = $CA, DateFin = $DateFin WHERE CodE = \"$temp\"");
	print("<script text=\"text/javascript\"> 
alert(\"Sca modifiée !\"); 
window.location.replace(\"index.php\"); 
</script>");
}
else
{
	$CodE = $_POST['CodE'];
	$Nom = $_POST['Nom'];
	$CA = $_POST['CA'];
	$DateFin = $_POST['DateFin'];

	query_database("INSERT INTO Sca VALUES(\"$CodE\", \"$Nom\",$CA, $DateFin)");
	print("<script text=\"text/javascript\"> 
alert(\"Sca ajoutée !\"); 
window.location.replace(\"index.php\"); 
</script>");
}

?> 
