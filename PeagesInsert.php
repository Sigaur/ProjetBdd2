<?php
session_start();
include("db.php"); 

$Nom = $_POST['Nom'];
$CodT = $_POST['CodT'];
$PgDuKm = $_POST['PgDuKm'];
$PgAuKm = $_POST['PgAuKm'];
$Tarif = $_POST['Tarif'];

$query_database("INSERT INTO peages VALUES(\"$Nom\",\"$CodT\", $PgDuKm,$PgAuKm,$Tarif)");

?> 

<script text="text/javascript"> 
alert("Péage ajouté !"); 
window.location.replace("index.php");

</script>