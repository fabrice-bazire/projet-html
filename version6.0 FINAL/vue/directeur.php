<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style/style.css" /> 
    </head>
    
	<body>	
		<header>
			<div class="logo">
				<img src="logo2.gif" alt="logo du site" title="logo"/>
			</div>
			<nav>
				<ul>
					<li>          </li>
					<li> Le Garage des Stars </li>
				</ul>
			</nav>
			<div class="icone">
				<img src="img.bmp" alt="logo networks" title="logo networks" usemap="#logo"/>
				<map name="logo">
					<area shape="rect" coords="0,0,41,58" href="http://www.google.fr" alt="google" />
					<area shape="rect" coords="42,0,83,58" href="http://www.gmail.com" alt="gmail"/>
					<area shape="rect" coords="84,0,125,58" href="http://www.twitter.com" alt="twitter" />
					<area shape="rect" coords="126,00,167,58" href="http://www.facebook.com" alt="facebook" />
					<area shape="rect" coords="168,00,209,58" href="http://www.googleplus.com" alt="google plus" />
					<area shape="rect" coords="210,00,247,58" href="http://www.openclassroom.fr" alt="openclassroom" />
				</map>
			</div>
		</header>
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
		<footer>
		</footer>
	</body>
</html>
