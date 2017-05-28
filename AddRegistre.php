<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('registre.png');}</style>
<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Registre</title>
</head>

<body>

<div class="Stroll">
<h1 class="title"> 
	<?php
	if (isset($_POST['update']))
	{
		print("Modifier Le registre");
	}
	else
	{
		print("Ajouter dans le registre");
	}
	?>
</h1>
<form action="RegistreInsert.php"method="post">
 
 <div>
 <input type="text" required="required" name="CodT" class="id" placeholder="Code du tronçon" />
 </div>
 
<div>
 <input type="text" required="required" name="IdRegistre" class="id" placeholder="Id du registre" />
 </div>
 
 <div>
 <input type="text" required="required" name="Descriptif" class="id" placeholder="Descriptif du problème" />
 </div>
	 
 <div>
 <input type="text" required="required" name="DateDebut" class="id" placeholder="Date de début du bloquage" />
 </div>

  <div>
 <input type="text" required="required" name="DateFin" class="id" placeholder="Date de fin du bloquage" />
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
