<?php
session_start();
include("db.php"); 

$Nom = $_POST['Nom'];
$CodP = $_POST['CodP'];
$CodT = $_POST['Libelle'];
$Numero = $_POST['Numero'];

query_database("INSERT INTO Villes VALUES(\"$Nom\", $CodP, \"$Libelle\", $Numero)");
?> 
<script text="text/javascript"> 
alert("Ville ajoutée !"); 
window.location.replace("index.php"); 
</script>