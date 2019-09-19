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
				<legend>Prise de rendez-vous</legend>
				<p>Emploi du temps de <?php echo "$mecanoselect"; ?> :</p>

				<table>
					   
				</table>

				<p>
					<label for="nomDuMecanicien">Nom du mecanicien:</label>
					<input type="text" name="nomDuMecanicien" value='<?php echo "$mecanoselect"; ?>' size="15" maxlength="15"/>
				</p>
				<p>
					<label for="dateInter">Date de l'intervention:</label>
					<input type="date" name="dateInter" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<label for="heureInter">Heure de l'intervention:</label>
					<input type="time" name="heureInter" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					Type d'intervention: <?php echo "$choixInter"; ?>
				</p>
				<p>
					<label for="idClient">Id client:</label>
					<input type="text" name="idClient" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<input type="submit" value="Valider le rendez-vous" name="validerRdv" />			
					<input type="reset" value="Tout effacer" name="effacer" />
				</p>
			</fieldset>
		</form>
		<form method="post" action="garage.php">
		<input type="submit" value="Retour" name="retour" />
		</form>
	</body>

</html>