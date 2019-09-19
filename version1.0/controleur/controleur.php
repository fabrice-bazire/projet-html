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


function ctlAcceuil(){
	afficherAcceuil();
}

function ctlEmploye(){
	afficherEmploye();
}

function ctlIdentification($identifiant, $mdp){
	identification($identifiant,$mdp);
}