<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$IdRegistre = $_POST['IdRegistre'];
$Descriptif = $_POST['Descriptif'];
$DateDebut = $_POST['DateDebut'];
$DateFin = $_POST['DateFin'];

query_database("INSERT INTO registre VALUES(\"$CodT\",$IdRegistre, \"$Descriptif\",$DateDebut,$DateFin)");

?> 

<script text="text/javascript"> 
alert("Registre ajouté !"); 
window.location.replace("index.php");

</script>