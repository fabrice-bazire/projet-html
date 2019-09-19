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
				<legend>Modifier client</legend>
#penser a remplir value
				<p>
					<label for="nom">Nom:</label>
					<input type="text" name="nom" id="nom" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<label for="prenom">Prénom:</label>
					<input type="text" name="prenom" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<label for="adresse">Adresse</label>
					<input type="text" name="adresse" value="" size="15" maxlength="50" required/>
				</p>
				<p>
					<label for="tel">Tel:</label>
					<input type="number" name="tel" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<label for="mail">Mail:</label>
					<input type="text" name="mail" value="" size="15" maxlength="30" required/>
				</p>
				<p>
					<label for="date">Date de naissance:</label>
					<input type="date" name="date" value="" size="15" maxlength="15" required>
				</p>
				<p>
					<label for="montantMax">Montant du découvert autorisé:</label>
					<input type="number" name="montantMax" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<input type="submit" value="Ajouter client" name="ajouter" />			
					<input type="reset" value="Tout effacer" name="effacer" />
				</p>
			</fieldset>
		</form>

		<form method="post" action="garage.php">
			<fieldset>
				<legend>Synthese du client</legend>
				<p>Liste des interventions realisées:</p>
				<?php echo $synthese; ?>
			</fieldset>
		</form>


		
	</body>
