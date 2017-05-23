<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$Numero = $_POST['Numero'];
$Libelle = $_POST['Libelle'];

query_database("INSERT INTO sortie VALUES(\"$CodT\",$Numero,\"$Libelle\")");
print("INSERT INTO sortie VALUES($CodT,$Numero,\"$Libelle\")");

?> 

<script text="text/javascript"> 
alert("Sortie ajoutée !"); 
//window.location.replace("index.php");

</script>