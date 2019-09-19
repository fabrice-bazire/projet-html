<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style/style.css" /> 

	  <style type="text/css">
        caption /* Titre du tableau */
        {
           margin: auto; /* Centre le titre du tableau */
           font-family: Arial, Times, "Times New Roman", serif;
           font-weight: bold;
           font-size: 1.2em;
           color: #009900;
           margin-bottom: 20px; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
        }
 
        table /* Le tableau en lui-même */
        {
           margin: auto; /* Centre le tableau */
           border: 4px outset green; /* Bordure du tableau avec effet 3D (outset) */
           border-collapse: collapse; /* Colle les bordures entre elles */
           width:100%;
        }
        th /* Les cellules d'en-tête */
        {
           background-color: #006600;
           color: white;
           font-size: 1.1em;
           font-family: Arial, "Arial Black", Times, "Times New Roman", serif;
           border:1px solid red;
        }
 
        td /* Les cellules normales */
        {
            font-size:0.8em;
           border: 1px solid black;
           font-family: Verdana, "Trebuchet MS", Times, "Times New Roman", serif;
           text-align: center; /* Tous les textes des cellules seront centrés*/
           padding: 5px; /* Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
           height:25px;
           width:200px;
        }
        td.time
        {
            font-size:1em;
            height:50px;
            width:100px;
        }
    </style>
    </head>
    
	<body>
		<form method="post" action="garage.php">
			<fieldset>
				<legend>Modifier client</legend>
				<p>
					<label for="idClient">Id client</label>
					<input type="text" name="idClient" id="idClient" value="" size="15" maxlength="15"/>
				</p>
				<p>
					<label for="nom">Nom:</label>
					<input type="text" name="nom" id="nom" value="" size="15" maxlength="15"/>
				</p>
				<p>
					<label for="prenom">Prénom:</label>
					<input type="text" name="prenom" value="" size="15" maxlength="15"/>
				</p>
				<p>
					<label for="adresse">Adresse</label>
					<input type="text" name="adresse" value="" size="15" maxlength="50"/>
				</p>
				<p>
					<label for="tel">Tel:</label>
					<input type="number" name="tel" value="" size="15" maxlength="15"/>
				</p>
				<p>
					<label for="mail">Mail:</label>
					<input type="text" name="mail" value="" size="15" maxlength="30"/>
				</p>
				<p>
					<label for="date">Date de naissance:</label>
					<input type="date" name="date" value="" size="15" maxlength="15">
				</p>
				<p>
					<label for="montantMax">Montant du découvert autorisé:</label>
					<input type="number" name="montantMax" value="" size="15" maxlength="15"/>
				</p>
				<p>
					<input type="submit" value="Modifier" name="modifier" />			
					<input type="reset" value="Tout effacer" name="effacer" />
				</p>
			</fieldset>
		</form>

		<form method="post" action="garage.php">
			<fieldset>
				<legend>Synthese du client</legend>
				<p>Liste des interventions realisées su le vehicule de <?php echo $nomClient; ?></p>
				<?php echo $synthese; ?>
			</fieldset>
		</form>

		<form method="post" action="garage.php">
			<fieldset>
				<legend>Prise de rendez-vous</legend>
				<p>Choix du mécanicien: <?php echo $mecaniciens; ?></p>



				<table>
					<?php
    $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    //$rdv["Dimanche"]["16:30"] = "Dermatologue";
   // $rdv["Lundi"]["9"] = "Mémé -_-";
    echo "<tr><th>Heure</th>";
    for($x = 1; $x < 8; $x++)
        echo "<th>".$jour[$x]."</th>";
    echo "</tr>";
    for($j = 9; $j < 20; $j += 1) {
        echo "<tr>";
        for($i = 0; $i < 7; $i++) {
            if($i == 0) {
                $heure = str_replace(".5", ":30", $j);
                if(substr($heure,-3,3) != ":30")
                    echo "<td class=\"time\" rowspan=\"1\">".$heure."h</td>";
            }
            echo "<td>";
            if(isset($rdv[$jour[$i+1]][$heure])) {
                echo $rdv[$jour[$i+1]][$heure];
            }
            echo "</td>";
        }
        echo "</tr>";
    }
?>
				</table>


			</fieldset>
		</form>

		
	</body>
