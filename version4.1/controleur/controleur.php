<?php
require_once('modele/modele.php');
require_once('vue/vue.php');

function ctlPayerEnDiffere(){
	foreach ($_POST as $key => $val) {
		if (is_int($key)){	
			if (verifDifferePossible($key) == TRUE){
				payerEnDiffere($key);
			}else{
				throw new Exception("Erreur : Decouvert autorise depasse", 1);
			}
		}
	}
	$nomMeca = recupererMeca();
	afficherEmploye($nomMeca);
}

function ctlPayer(){
	foreach ($_POST as $key => $val) {
		if (is_int($key)){		
			payer($key);
		}
	}
	$nomMeca = recupererMeca();
	afficherEmploye($nomMeca);
}

function ctlAjouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax){
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['date']) && !empty($_POST['montantMax'])){
		ajouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax);
		afficherEmploye();
	}else{
		echo 'un des champs est invalide';
	}
}

function ctlAjouterEmploye($nom, $mdp, $login, $categorie){
	if(!empty($_POST['nom']) && !empty($_POST['mdp']) && !empty($_POST['login']) && !empty($_POST['categorie'])){
		ajouterEmploye($nom, $mdp, $login, $categorie);
		afficherDirecteur();
	}
}

function ctlAjouterInter($nomInter, $montantInter, $piecesAFournir){
	if (!empty($_POST['nomInter']) && !empty($_POST['montantInter']) && !empty($_POST['piecesAFournir'])){
		ajouterInter($nomInter, $montantInter, $piecesAFournir);
		afficherDirecteur();
	}
}

/*function ctlAfficherListeEmloye(){
	$employe=chercherTousLesEmploye();
	afficherListeEmploye($employe);
}*/

function ctlSupprimerEmploye($nom){
	if (!empty($nom)){
		supprimerEmploye($nom);
		afficherDirecteur();
	}
}

function ctlSupprimerIntervention($nomInter){
	if (!empty($nomInter)){
		supprimerIntervention($nomInter);
		afficherDirecteur();
	}
}

function ctlModifierInter($nomInter, $montantInter, $piecesAFournir){
	if (!empty($nomInter)){
		if(!empty($montantInter)){
			modifierMontantInter($nomInter, $montantInter);
		}
		if(!empty($piecesAFournir)){
			modifierPiecesAFournir($nomInter, $piecesAFournir);
		}
	}else{
		echo 'impossible de modifier une intervention sans son nom';
	}
	afficherDirecteur();
}

/*function ctlModifier($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax, $id){
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['date']) && !empty($_POST['montantMax'])){
		//$id=ctlRecupererId();
		modifier($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax, $id);
	}else{
		echo 'un des champs est invalide';
	}
}*/

function ctlModifier($id, $nom, $prenom, $adresse, $tel, $mail, $date, $montantMax){
	if (!empty($id)) {
		if(!empty($nom)){
			modifierNom($id, $nom);
		}
		if(!empty($prenom)){
			modifierPrenom($id, $prenom);
		}
		if(!empty($adresse)){
			modifierAdresse($id, $adresse);
		}
		if(!empty($tel)){
			modifierTel($id, $tel);
		}
		if(!empty($mail)){
			modifierMail($id, $mail);
		}
		if(!empty($date)){
			modifierDate($id, $date);
		}
		if(!empty($montantMax)){
			modifierMontantMax($id, $montantMax);
		}
	}
	else{
		echo "Impossible de modifier un client sans son id.";
	}
	$nomMeca=recupererMeca();
	afficherEmploye();
}

function ctlModifierEmploye($nom, $mdp, $login, $categorie){
	if (!empty($nom)) {
		if(!empty($mdp)){
			modifierMdp($nom, $mdp);
		}
		if(!empty($login)){
			modifierLogin($nom, $login);
		}
		if(!empty($categorie)){
			modifierCategorie($nom, $categorie);
		}
	}
	afficherDirecteur();
}

function ctlAcceuil(){
	afficherAcceuil();
}

function ctlEmploye(){
	$nomMeca=recupererMeca();
	afficherEmploye($nomMeca);
}

function ctlIdentification($identifiant, $mdp){ 
	identification($identifiant,$mdp);
}

function ctlRetour(){
	$nomMeca=recupererMeca();
	afficherEmploye($nomMeca);
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

function ctlSynthese($idClient){
	if(!empty($idClient)){
		$client=trouverClient($idClient);
		$synthese=synthese($idClient);
		afficherSynthese($client, $synthese);
	}
	else{
		throw new Exception("Le champ est vide.");
	}
}

/*function ctlPayer(){
	foreach ($_POST as $key => $val) {
		if (is_int($key)) {
			if (!empty($_POST [$key])) {
				payer($key);
			}
		}
	}
	afficherEmploye();
}*/

function ctlAfficherPriseRdv($mecanoselect){
	$nomInter=recupererInter();
	priseRdv($mecanoselect, $nomInter);
}


function ctlEnregistrerRdv($nomDuMecanicien, $dateInter, $heureInter, $typeInter, $idClient){
	//if($_POST['heureInter']>9 || $_POST['heureInter']<19){
		if(!empty($_POST['nomDuMecanicien']) && !empty($_POST['dateInter']) && !empty($_POST['heureInter']) && !empty($_POST['choixInter']) && !empty($_POST['idClient'])){
			enregistrerRdv($nomDuMecanicien, $dateInter, $heureInter, $typeInter, $idClient);
			echo 'Le rendez-vous du '. $dateInter .' à '. $heureInter .'h a été enregistré';
			echo '<br> Les pièces à apporter sont les suivantes : ';
			afficherPieces($typeInter);
			$nomInter=recupererInter();
			$mecanoselect=$nomDuMecanicien;
			priseRdv($mecanoselect, $nomInter);
		}else{
			echo 'un des champs est invalide';
		}
	//}else{
	//	echo 'les rendez-vous doivent etre pris entre 9h et 19h';
	//}
}