<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style/style.css" /> 
    </head>
    
	<body>
		<form method="post" action="garage.php">
			<fieldset><legend>Liste des pièces à apporter</legend>
				<p>?php echo "$rdv"; ?></p>
				<p><?php echo "$contenuPieces"; ?></p>
				<p>
					<input type="submit" value="Retour" name="retour" />
				</p>
			</fieldset>
		</form>
	</body>

</html>