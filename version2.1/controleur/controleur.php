<?php
require_once('modele/modele.php');
require_once('vue/vue.php');



function ctlAjouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax){
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['date']) && !empty($_POST['montantMax'])){
		ajouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax);
		afficherEmploye();
	}else{
		echo 'un des champs est invalide';
	}
}

function ctlModifier($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax, $id){
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['date']) && !empty($_POST['montantMax'])){
		//$id=ctlRecupererId();
		modifier($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax, $id);
	}else{
		echo 'un des champs est invalide';
	}
}


function ctlAcceuil(){
	afficherAcceuil();
}

function ctlEmploye(){
	afficherEmploye();
}

function ctlIdentification($identifiant, $mdp){
	identification($identifiant,$mdp);
}

function ctlRetour(){
	retour();
}

function ctlChercherClient($nom, $date){
	if(!empty($nom) && !empty($date)){
		$client=ChercherClient($nom, $date);
		afficherClient($client);
	}else{
		echo 'un des champs est vide';
	}
}

function ctlRecupererId(){
	foreach ($_POST as $key => $val) {
		if (is_int($key)) {
			if (!empty($_POST [$key])) {
				$idClientEnCours=$key;
			}
		}
	}
}

function ctlAfficherPageClient(){
	$nomMeca=recupererMeca();
	foreach ($_POST as $key => $val) {
		if (is_int($key)) {
			if (!empty($_POST [$key])) {
				
				afficherPageClient($key, $nomMeca);
			}
		}
	}
	//$client=
}

function ctlAfficherToutClient(){
	$client=chercherTousLesClients();
	afficherClient($client);
}