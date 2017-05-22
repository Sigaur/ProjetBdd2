<?php
session_start();
include("db.php"); 

$Nom = $_POST['Nom'];
$CodP = $_POST['CodP'];
$CodT = $_POST['Libelle'];
$Numero = $_POST['Numero'];

$query = $projetbdd2->prepare("INSERT INTO Villes (Nom, CodP, Libelle, Numero) 
VALUES(:CodP,:Nom,:Numero,:Libelle)");
$query->execute(array('Nom' =>$Nom, ':CodP' => $CodP, 'Nom' =>$Nom, ':Libelle' => $Libelle, ':Numero' =>$Numero));
$data = $query->fetch();

$projetbdd2->close();
?> 
<script text="text/javascript"> 
alert("Ville ajoutée !"); 
window.location.replace("index.php"); 
</script>