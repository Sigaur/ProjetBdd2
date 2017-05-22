<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Ressources/Logo.jpg" />
<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Société</title>
</head>

<body>


<div class="Stroll">
<h1 class="title"> Ajouter une société</h1>
<form action="ScaInsert.php"method="post">
<div>
 <input type="text" required="required" name="CodE" class="id" placeholder="Code de l'entreprise" />
 </div>
 
<div>
 <input type="text" required="required" name="Nom" class="id" placeholder="Nom de l'entreprise" />
 </div>
 
 <div>
 <input type="text" required="required" name="NomPeage" class="id" placeholder="Nom du péage géré" />
 </div>

 <div>
 <input type="text" required="required" name="CA" class="id" placeholder="Chiffre d'affaire" />
 </div>
	 
 <div>
 <input type="text" required="required" name="DateFin" class="id" placeholder="Durée avant la fin de contrat" />
 </div>
 
  <div class="sub">
        <input type="submit" value="Enregistrer" />
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
