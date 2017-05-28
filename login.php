<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
<link rel ="stylesheet" href= "login.css"/>
<style type="text/css">body{background-image:url('log.jpg');}</style>
<title>Log In</title>
</head>

<body>
	<div id="header">
		<h2 class="element">Gestionnaire d'Autoroutes</h2>	
	</div>

<div class="Stroll">
<h1 class="title"> Log In</h1>
<form  action="connexion.php"method="post">

<div>
 <input type="text" required="required" name="pseudo" class="id" placeholder="ID" />
 </div>
 
 <div>     
   <input type="password" name="mp"  placeholder="Password" class="id"required="required" />
</div>

	
  <div class="sub">
        <input type="submit" value="Submit" />
  </div>
</form>
</div>

</body>

</html>
