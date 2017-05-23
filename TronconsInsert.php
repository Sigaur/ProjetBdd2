<?php
session_start();
include("db.php"); 

$CodT = $_POST['CodT'];
$CodA = $_POST['CodA'];
$DuKm = $_POST['DuKm'];
$AuKm = $_POST['AuKm'];

query_database("INSERT INTO troncons VALUES(\"$CodT\", \"$CodA\", $DuKm, $AuKm)");

?> 
<script text="text/javascript"> 
alert("tronçon ajouté !"); 
window.location.replace("index.php"); 
</script>