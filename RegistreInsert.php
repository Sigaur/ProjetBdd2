<?php
session_start();
include("db.php"); 

if (isset($_POST['update']))
{
	$temp = $_POST['update'];
	print("$temp");
	$CodT = $_POST['CodT'];
	$IdRegistre = $_POST['IdRegistre'];
	$Descriptif = $_POST['Descriptif'];
	$DateDebut = $_POST['DateDebut'];
	$DateFin = $_POST['DateFin'];

	query_database("UPDATE registre SET CodT = \"$CodT\", IdRegistre = $IdRegistre, Descriptif = \"$Descriptif\", DateDebut = $DateDebut, DateFin = $DateFin WHERE IdRegistre = $temp");

	print("<script text=\"text/javascript\"> 
alert(\"Fermeture modifiée !\"); 
window.location.replace(\"index.php\"); 
</script>");
}
else
{
	$CodT = $_POST['CodT'];
	$IdRegistre = $_POST['IdRegistre'];
	$Descriptif = $_POST['Descriptif'];
	$DateDebut = $_POST['DateDebut'];
	$DateFin = $_POST['DateFin'];

	query_database("INSERT INTO registre VALUES(\"$CodT\",$IdRegistre, '$Descriptif',$DateDebut,$DateFin)");

	print("<script text=\"text/javascript\"> 
alert(\"Fermeture ajoutée !\"); 
window.location.replace(\"index.php\"); 
</script>");
}


?> 
