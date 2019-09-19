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