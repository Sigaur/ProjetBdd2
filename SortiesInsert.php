<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$Numero = $_POST['Numero'];
$Libelle = $_POST['Libelle'];

$query = $projetbdd2->prepare("INSERT INTO sortie (Numero, Libelle, CodT) 
VALUES(:CodT,:Numero,:Libelle)");
$query->execute(array(':CodT' =>$CodT, ':Numero' => $Numero, 'Libelle' =>$Libelle));
$data = $query->fetch();

$projetbdd2->close();
?> 
<script text="text/javascript"> 
alert("Sortie ajoutée !"); 
window.location.replace("index.php");  
</script>