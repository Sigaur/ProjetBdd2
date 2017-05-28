<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('ville.jpg');}</style>

<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Ville</title>
</head>

<body>


<div class="Stroll">
	<h1 class="title"> <?php
	if (isset($_POST['update']))
	{
		print("Modifier La Ville");
	}
	else
	{
		print("Ajouter Une Ville");
	}
	?></h1>
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
			<?php
	if (isset($_POST['update']))
	{
		$temp = $_POST['update'];

		print("<input type='hidden' name='update' value=$temp>
			<input type=\"submit\" value=\"Mettre à jour\" />");
	}
	else
	{
		print("<input type=\"submit\" value=\"Ajouter\" />");
	}
?>
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
