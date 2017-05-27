<?php
session_start();
include("db.php"); 

$CodE = $_POST['CodE'];
$Nom = $_POST['Nom'];
$NomPeage = $_POST['NomPeage'];
$CA = $_POST['CA'];
$DateFin = $_POST['DateFin'];

query_database("INSERT INTO Sca VALUES(\"$CodE\", \"$Nom\",\"$NomPeage\",$CA, $DateFin)");

?> 

<script text="text/javascript"> 
alert("Sca ajoutée !"); 
window.location.replace("index.php");

</script>