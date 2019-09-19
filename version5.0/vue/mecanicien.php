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
				<legend>Créneau de Formation</legend>
				
				<p>
					<label for="nomDuMecanicienPourForm">Nom du mecanicien:</label> <?php echo $mecaniciens; ?>
				</p>
				<p>
					<label for="dateForm">Date de la formation:</label>
					<input type="date" name="dateForm" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<label for="heureForm">Heure de la formation:</label>
					<input type="time" name="heureForm" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<input type="submit" value="Valider la formation" name="validerForm" />			
					<input type="reset" value="Tout effacer" name="effacer" />
				</p>
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
