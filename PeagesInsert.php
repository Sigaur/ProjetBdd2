<?php
session_start();
include("db.php"); 

$Nom = $_POST['Nom'];
$CodT = $_POST['CodT'];
$PgDuKm = $_POST['PgDuKm'];
$PgAuKm = $_POST['PgAuKm'];
$Tarif = $_POST['Tarif'];

$query = $projetbdd2->prepare("INSERT INTO peages (Nom, CodT, PgDuKm, PgAuKm, Tarif) 
VALUES(:Nom,:CodT,:PgDuKm,:PgAuKm,:Tarif)");
$query->execute(array(':Nom' => $Nom, 'CodT' =>$CodT, 'PgDuKm' =>$PgDuKm, 'PgAuKm' =>$PgAuKm, ':Tarif' =>$Tarif));
$data = $query->fetch();

$projetbdd2->close();
?> 
<script text="text/javascript"> 
alert("péage ajouté !"); 
window.location.replace("index.php");  
</script>