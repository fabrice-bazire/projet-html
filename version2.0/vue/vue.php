<?php

function afficherSynthese ($client){
	$synthese='';
	foreach($client as $ligne){
		
		$contenuAffichage='<form method="post" action="site.php"><fieldset><legend>Affichage des clients</legend><p><input type="checkbox" name="$ligne->id">Client numéro $ligne->id <input type="text" name="user" id="$ligne->id" value="$ligne->nom  $ligne->prenom né le $ligne->date_de_naissance joignable sur le 0$ligne->numero_de_tel" size="70"  readonly/></p><p><input type="submit" value="Supprimer" name="supprimer" /></p></fieldset></form>';
	}
	require_once('vue/employe.php');
}

function afficherAcceuil(){
	$contenuAffichage='';
	require_once('vue/acceuil.php');
}

function afficherEmploye(){
	$contenuAffichage='';
	require_once('vue/employe.php');
}

function afficherMecanicien($nomMeca){
	$mecaniciens='';
	$mecaniciens='<select name="mecaniciens">';
	foreach($nomMeca as $ligne){
		$mecaniciens.="<option >$ligne->nomEmploye</option>";
	}
	$mecaniciens.='</select>';

	$contenuAffichage='';
	require_once('vue/mecanicien.php');
}

function afficherClient($client){
	$affichage = false;
	$contenuAffichage='';
	$contenuAffichage="<form method=\"post\" action=\"garage.php\"><fieldset><legend>Affichage des clients</legend>";
	foreach($client as $ligne){
		
		$contenuAffichage.="<p><input type=\"checkbox\" name=\"$ligne->idClient\">Client numéro $ligne->idClient <input type=\"text\" name=\"user\" id=\"$ligne->idClient\" value=\"$ligne->nom  $ligne->prenom né le $ligne->dateNaissance joignable sur le 0$ligne->numTel\" size=\"70\"  readonly/></p>";
		$affichage = true;
	}
	if($affichage == false){
		$contenuAffichage .= '<p>Aucune ligne ne correspond a votre requete</p></fieldset></form>';
	}else{
	$contenuAffichage .= "<p><input type=\"submit\" value=\"Selectionner\" name=\"selectionner\" /></p></fieldset></form>";
	}
	require_once('vue/selectionClient.php');

}

function afficherPageClient($id, $nomMeca){
	//variables a remplir
	

	$mecaniciens='';
	$mecaniciens='<select name="mecaniciens">';
	foreach($nomMeca as $ligne){
		$mecaniciens.="<option >$ligne->nomEmploye</option>";
	}
	$mecaniciens.='</select>';


	require_once('vue/client.php');
}

