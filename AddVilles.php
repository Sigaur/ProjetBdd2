<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Ressources/Logo.jpg" />
<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Ville</title>
</head>

<body>


<div class="Stroll">
	<h1 class="title"> Ajouter une ville</h1>
	<form action="VillesInsert.php"method="post">
		<div>
			<input type="text" required="required" name="Nom" class="id" placeholder="Nom de la ville" />
		</div>

		<div>
			<input type="text" required="required" name="CodP" class="id" placeholder="Code postal de la ville" />
		</div>
		
		<div>
			<input type="text" required="required" name="Libelle" class="id" placeholder="Nom de la sortie" />
		</div>
		
		<div>
			<input type="text" required="required" name="Numero" class="id" placeholder="Numéro de la sortie" />
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
