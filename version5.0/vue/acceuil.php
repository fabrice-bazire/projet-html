<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style/style.css" /> 
    </head>


    <body>
    	<h1>Bienvenue</h1>
    	<form method="post" action="garage.php">
    		<fieldset>
				<legend>Connexion</legend>
				<p>
					<label for="identifiant">Identifiant :</label>
					<input type="text" name="identifiant" id="identifiant" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<label for="mdp">Mot de passe :</label>
					<input type="password" name="mdp" value="" size="15" maxlength="15" required/>
				</p>
				<p>
					<input type="submit" value="Connexion" name="connexion" />
				</p>
			</fieldset>
		</form>
    </body>

</html>