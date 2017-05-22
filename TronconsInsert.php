<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$CodA = $_POST['CodA'];
$DuKm = $_POST['DuKm'];
$AuKm = $_POST['AuKm'];

$query = $projetbdd2->prepare("INSERT INTO troncons (CodT, CodA, DuKm, AuKm) 
VALUES(:CodT,:CodA,:DuKm,:AuKm)");
$query->execute(array(':CodT' => $CodT, 'CodA' =>$CodA, ':DuKm' =>$DuKm,':AuKm' => $AuKm));
$data = $query->fetch();
$projetbdd2->close();
?> 
<script text="text/javascript"> 
alert("tronçon ajouté !"); 
window.location.replace("index.php"); 
</script>