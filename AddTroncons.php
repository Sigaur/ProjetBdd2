<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Ressources/Logo.jpg" />
<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Tronçon</title>
</head>

<body>


<div class="Stroll">
<h1 class="title"> Ajouter un tronçon</h1>
<form action="TronconsInsert.php"method="post">
<div>
 <input type="text" required="required" name="CodT" class="id" placeholder="Code du tronçon" />
 </div>
 
 <div>
 <input type="text" required="required" name="CodA" class="id" placeholder="Code de l'autoroute" />
 </div>

 <div>
 <input type="text" required="required" name="DuKm" class="id" placeholder="Début du tronçon au km" />
 </div>


<div>
 <input type="text" required="required" name="AuKm" class="id" placeholder="Fin du tronçon au km" />
 </div>
	
  <div class="sub">
        <input type="submit" value="Enregistrer" />
  </div>
</form>
</div>
<footer> 
	<div id="banniere">
		<div class="Infos">
			<a href="index.php"> Retour au menu</a>
	</div>
	</div>
</footer>

</body>

</html>
