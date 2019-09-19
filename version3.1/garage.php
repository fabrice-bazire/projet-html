<?php

require_once('controleur/controleur.php');
//require_once('modele/connect.php');

//try{

	if(isset($_POST['connexion'])){
		$identifiant=$_POST['identifiant'];
		$mdp=$_POST['mdp'];
		ctlIdentification($identifiant, $mdp);
	}
		
	 elseif (isset($_POST['ajouter'])){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$tel=$_POST['tel'];
		$mail=$_POST['mail'];
		$date=$_POST['date'];
		$montantMax=$_POST['montantMax'];

		ctlAjouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax);
	}

	/*elseif (isset($_POST['selectionner'])){
		ctlAfficherPageClient();
	}*/

	elseif (isset($_POST['afficherToutClient'])){
		ctlAfficherToutClient();
	}

	elseif (isset($_POST['retour'])) {
		ctlRetour();
	}

	elseif (isset($_POST['modifier'])) {
		$id=$_POST['idClient'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$tel=$_POST['tel'];
		$mail=$_POST['mail'];
		$date=$_POST['date'];
		$montantMax=$_POST['montantMax'];
		ctlModifier($id, $nom, $prenom, $adresse, $tel, $mail, $date, $montantMax);
	}

	elseif (isset($_POST['afficherSynthese'])){
		$idClient=$_POST['idClient'];
		ctlSynthese($idClient);
	}

	elseif (isset($_POST['payer'])){
		ctlPayer();
	}

	elseif (isset($_POST['selectMeca'])){
		$mecanoselect='';
		$mecanoselect=$_POST['selectionmecano'];
		echo "$mecanoselect";
	}

	elseif (isset($_POST['chercherClient'] )){
		$nom=$_POST['nomClient'];
		$date=$_POST['dateClient'];
		CtlChercherClient($nom, $date);
	}else{

		ctlAcceuil();
	}

	//}catch(PDOException $e){
	//	CtlErreur();
	//}