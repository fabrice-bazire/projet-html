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