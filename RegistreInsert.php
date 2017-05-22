<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$IdRegistre = $_POST['IdRegistre'];
$Descriptif = $_POST['Descriptif'];
$DateDebut = $_POST['DateDebut'];
$DateFin = $_POST['DateFin'];

$query = $projetbdd2->prepare("INSERT INTO registre (CodT, IdRegistre, Descriptif, DateDebut, DateFin) 
VALUES(:CodT,:IdRegistre,:Descriptif,:DateDebut,:DateFin)");
$query->execute(array(':CodT' => $CodT, ':IdRegistre' => $IdRegistre, 'Descriptif' =>$Descriptif, ':DateDebut' =>$DateDebut, ':DateFin' => $DateFin));
$data = $query->fetch();

$projetbdd2->close();
?> 
<script text="text/javascript"> 
alert("Informations ajoutées au registre !"); 
window.location.replace("index.php"); 
</script>