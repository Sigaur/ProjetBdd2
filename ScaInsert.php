<?php
session_start();
include("db.php"); 

$CodE = $_POST['CodE'];
$Nom = $_POST['Nom'];
$NomPeage = $_POST['NomPeage'];
$CA = $_POST['CA'];
$DateFin = $_POST['DateFin'];

$query = $projetbdd2->prepare("INSERT INTO Sca (CodE, Nom, NomPeage, CA, DateFin) 
VALUES(:CodE,:Nom,:NomPeage,:CA,:DateFin)");
$query->execute(array(':CodE' => $CodE, 'Nom' =>$Nom, ':NomPeage' =>$NomPeage, ':CA' => $CA, ':DateFin' => $DateFin));
$data = $query->fetch();

$projetbdd2->close();
?> 
<script text="text/javascript"> 
alert("péage ajouté !"); 
window.location.replace("index.php");  
</script>