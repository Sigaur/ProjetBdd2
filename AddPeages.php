<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('peage.jpg');}</style>
<link rel ="stylesheet" href= "formulaire.css"/>
<title>Ajout Péage</title>
</head>

<body>

<?php
	if (isset($_POST['update']))
	{
		$temp = $_POST['update'];
		print("<div class=\"Stroll\">
				<h1 class=\"title\"> Modifier une péage</h1>
				<form action=\"PeagesInsert.php\"method=\"post\">
					<div>
						<input type=\"text\" required=\"required\" name=\"Nom\" class=\"id\" placeholder=\"Nom du péage\" />
					</div>
					 
					<div>
						<input type=\"text\" required=\"required\" name=\"CodT\" class=\"id\" placeholder=\"Code du tronçon\" />
					</div>

					<div>
						<input type=\"text\" required=\"required\" name=\"CodE\" class=\"id\" placeholder=\"Code Entreprise Propriétaire\" />
					</div>
					
					<div>
						<input type=\"text\" required=\"required\" name=\"PgDuKm\" class=\"id\" placeholder=\"Début de la zone imposée\" />
					</div>
					
					<div>
						<input type=\"text\" required=\"required\" name=\"PgAuKm\" class=\"id\" placeholder=\"Fin de la zone imposée\" />
					</div>
					
					<div>
						<input type=\"text\" required=\"required\" name=\"Tarif\" class=\"id\" placeholder=\"Tarif du péage\" />
					</div>
						
					<div class=\"sub\">
						<input type='hidden' name='update' value='$temp'>
						<input type=\"submit\" value=\"Mettre à jour\" />

			
					</div>
				</form>
			</div>");
	}
	else
	{
		print("<div class=\"Stroll\">
				<h1 class=\"title\"> Ajouter une péage</h1>
				<form action=\"PeagesInsert.php\"method=\"post\">
					<div>
						<input type=\"text\" required=\"required\" name=\"Nom\" class=\"id\" placeholder=\"Nom du péage\" />
					</div>
					 
					<div>
						<input type=\"text\" required=\"required\" name=\"CodT\" class=\"id\" placeholder=\"Code du tronçon\" />
					</div>

					<div>
						<input type=\"text\" required=\"required\" name=\"CodE\" class=\"id\" placeholder=\"Code Entreprise Propriétaire\" />
					</div>
					
					<div>
						<input type=\"text\" required=\"required\" name=\"PgDuKm\" class=\"id\" placeholder=\"Début de la zone imposée\" />
					</div>
					
					<div>
						<input type=\"text\" required=\"required\" name=\"PgAuKm\" class=\"id\" placeholder=\"Fin de la zone imposée\" />
					</div>
					
					<div>
						<input type=\"text\" required=\"required\" name=\"Tarif\" class=\"id\" placeholder=\"Tarif du péage\" />
					</div>
						
					<div class=\"sub\">
						<input type=\"submit\" value=\"Enregistrer\" />	
					</div>
				</form>
			</div>");
	}
?>

<footer> 
	<div id="banniere">
		<div class="Infos">
			<a href="index.php"> Retour au menu</a>
	</div>
	</div>
</footer>

</body>

</html>
