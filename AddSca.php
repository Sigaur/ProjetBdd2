<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('sca.jpg');}</style>
<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Societe</title>
</head>

<body>


<div class="Stroll">
<h1 class="title"> <?php
	if (isset($_POST['update']))
	{
		print("Modifier La Sociétée");
	}
	else
	{
		print("Ajouter Une Sociétée");
	}
	?></h1>
<form action="ScaInsert.php"method="post">
<div>
 <input type="text" required="required" name="CodE" class="id" placeholder="Code de l'entreprise" />
 </div>
 
<div>
 <input type="text" required="required" name="Nom" class="id" placeholder="Nom de l'entreprise" />
 </div>

 <div>
 <input type="text" required="required" name="CA" class="id" placeholder="Chiffre d'affaire" />
 </div>
	 
 <div>
 <input type="text" required="required" name="DateFin" class="id" placeholder="Durée avant la fin de contrat" />
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
			<a href="Index.php"> Retour au menu</a>
	</div>
	</div>
</footer>
</body>

</html>
