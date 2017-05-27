<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$Numero = $_POST['Numero'];
$Libelle = $_POST['Libelle'];
$Km = $_POST['Km'];

query_database("INSERT INTO sorties VALUES(\"$CodT\",\"$Libelle\", $Numero, $Km)");

?> 

<script text="text/javascript"> 
alert("Sortie ajoutee !"); 
window.location.replace("index.php");

</script>