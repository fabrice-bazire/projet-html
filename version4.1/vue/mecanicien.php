<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style/style.css" /> 
    </head>
    
	<body>	
	  	<form method="post" action="garage.php">
			<fieldset>
				<legend>Selection du planning</legend>
				<p>Voir le planning de: <?php echo $mecaniciens; ?></p>
				<input type="submit" name="voirPlanning" value="Voir le planning"/>
			</fieldset>
		</form>

		<form method="post" action="garage.php">
			<fieldset>
				<legend>Deconnexion</legend>
				<p>
				<input type="submit" name="deconnexion" value="Deconnexion"/>
				</p>			
			</fieldset>
		</form>

	</body>
</html>
