<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<style type="text/css">body{background-image:url('destination.jpg');}</style>
<link rel ="stylesheet" href= "itineraire.css"/>
<title>Itinéraire</title>
</head>

<body>


<div class="Stroll">
<h1 class="title">Nouvel itinéraire</h1>
<form action="itineraire.php"method="post">
<div>
 <input type="text" required="required" name="NomD" class="id" placeholder="Ville de départ" />
 </div>
 
 <div>
 <input type="text" required="required" name="NomA" class="id" placeholder="ville d'arrivée" />
 </div>

	
  <div class="sub">
        <input type="submit" value="Chercher" />
  </div>
</form>
</div>
<footer> 
	<div id="banniere">
	</div>
</footer>

</body>

</html>
