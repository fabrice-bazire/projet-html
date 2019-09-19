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
				<legend>Ajouter un employe</legend>
				<p>
					<label for="nom">Nom:</label>
					<input type="text" name="nom" value="" size="100" required/>
				</p>
				<p>
					<label for="prenom">Mot de passe:</label>
					<input type="password" name="mdp" value="" size="100" required/>
				</p>
				<p>
					<label for="adresse">Login:</label>
					<input type="text" name="login" value="" size="100" required/>
				</p>
				<p>
					<label for="categorie">Categorie:</label>
					<select name="categorie">
						<option value="agentAcceuil">Agent d'acceuil</option>
						<option value="mecanicien">Mecanicien</option>
						<option value="directeur">Directeur</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Ajouter employe" name="ajouterEmploye" />			
					<input type="reset" value="Tout effacer" name="effacer" />
				</p>
			</fieldset>
		</form>

		<form method="post" action="garage.php">
			<fieldset>
				<legend>Modifier employe</legend>
				<p>
					<label for="nom">Nom:</label>
					<input type="text" name="nom" value="" size="100" required/>
				</p>
				<p>
					<label for="prenom">Mot de passe:</label>
					<input type="password" name="mdp" value="" size="100" />
				</p>
				<p>
					<label for="adresse">Login:</label>
					<input type="text" name="login" value="" size="100" />
				</p>
				<p>
					<label for="categorie">Categorie:</label>
					<select name="categorie">
						<option value="agentAcceuil">Agent d'acceuil</option>
						<option value="mecanicien">Mecanicien</option>
						<option value="directeur">Directeur</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Modifier Employe" name="modifierEmploye" />			
					<input type="reset" value="Tout effacer" name="effacer" />
					<input type="submit" value="Supprimer employe" name="supprimerEmploye" />
				</p>
			</fieldset>
		</form>


		<form method="post" action="garage.php">
			<fieldset>
				<legend>Ajouter intervention</legend>
				<p>
					<label for="nom">Nom de l'intervention:</label>
					<input type="text" name="nomInter" value="" size="100" required/>
				</p>
				<p>
					<label for="prenom">Montant de l'intervention:</label>
					<input type="number" name="montantInter" value="" size="100" required/>
				</p>
				<p>
					<label for="adresse">Pièces à fournir:</label>
					<input type="text" name="piecesAFournir" value="" size="100" required/>
				</p>
				<p>
					<input type="submit" value="Ajouter intervention" name="ajouterInter" />			
					<input type="reset" value="Tout effacer" name="effacer" />
				</p>
			</fieldset>
		</form>

		<form method="post" action="garage.php">
			<fieldset>
				<legend>Modifier intervention</legend>
				<p>
					<label for="nom">Nom de l'intervention:</label>
					<input type="text" name="nomInter" value="" size="100" required/>
				</p>
				<p>
					<label for="prenom">Montant de l'intervention:</label>
					<input type="number" name="montantInter" value="" size="100" />
				</p>
				<p>
					<label for="adresse">Pièces à fournir:</label>
					<input type="text" name="piecesAFournir" value="" size="100" />
				</p>
				<p>
					<input type="submit" value="Modifier intervention" name="modifierInter" />			
					<input type="reset" value="Tout effacer" name="effacer" />
					<input type="submit" value="Supprimer intervention" name="supprimerIntervention" />
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
