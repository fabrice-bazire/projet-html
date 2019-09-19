<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style/style.css" /> 
    </head>
    
	<body>
		<form method="post" action="garage.php">
			<fieldset><legend>Synthèse du client</legend>
				<?php echo $contenuAffichageSynthese; ?>
				<p>
					<input type="submit" value="Retour" name="retour" />
					<input type="submit" value="Payer" name="payer" />
					<input type="submit" value="Payer en differe" name="differe" />
				</p>
			</fieldset>
		</form>
	</body>

</html>