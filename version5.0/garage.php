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

	elseif (isset($_POST['modifierEmploye'])){
		$nom=$_POST['nom'];
		$mdp=$_POST['mdp'];
		$login=$_POST['login'];
		$categorie=$_POST['categorie'];
		ctlModifierEmploye($nom, $mdp, $login, $categorie);
	}

	/*elseif (isset($_POST['afficherEmploye'])){
		CtlAfficherListeEmploye();
	}*/

	elseif(isset($_POST['supprimerEmploye'])){
		$nom=$_POST['nom'];
		ctlSupprimerEmploye($nom);
	}

	elseif(isset($_POST['validerForm'])){
		$dateFormation = $_POST['dateForm'];
		$heureFormation = $_POST['heureForm'];
		$nomDuMecanicienPourForm = $_POST['mecaniciens'];
		ctlValiderFormation($dateFormation, $heureFormation, $nomDuMecanicienPourForm);
	}

	elseif(isset($_POST['supprimerIntervention'])){
		$nomInter=$_POST['nomInter'];
		ctlSupprimerIntervention($nomInter);
	}

	elseif (isset($_POST['modifierInter'])){
		$nomInter=$_POST['nomInter'];
		$montantInter=$_POST['montantInter'];
		$piecesAFournir=$_POST['piecesAFournir'];
		ctlModifierInter($nomInter, $montantInter, $piecesAFournir);
	}

	elseif (isset($_POST['ajouterInter'])){
		$nomInter=$_POST['nomInter'];
		$montantInter=$_POST['montantInter'];
		$piecesAFournir=$_POST['piecesAFournir'];
		ctlAjouterInter($nomInter, $montantInter, $piecesAFournir);
	}

	elseif (isset($_POST['afficherSynthese'])){
		$idClient=$_POST['idClient'];
		ctlSynthese($idClient);
	}

	elseif (isset($_POST['payer'])){
		ctlPayer();
	}

	elseif (isset($_POST['differe'])){
		try{
			ctlPayerEnDiffere();
		}catch(Exception $e){
			echo 'erreur : decouvert autorise depasse';
		}
	}

	elseif (isset($_POST['selectMeca'])){
		$mecanoselect='';
		$mecanoselect=$_POST['selectionmecano'];
		ctlAfficherPriseRdv($mecanoselect);
	}

	elseif (isset($_POST['validerRdv'])){
		$nomDuMecanicien=$_POST['nomDuMecanicien'];
		$dateInter=$_POST['dateInter'];
		$heureInter=$_POST['heureInter'];
		$typeInter=$_POST['choixInter'];
		$idClient=$_POST['idClient'];
		ctlEnregistrerRdv($nomDuMecanicien, $dateInter, $heureInter, $typeInter, $idClient);
	}

	elseif (isset($_POST['ajouterEmploye'])){
		$nom=$_POST['nom'];
		$mdp=$_POST['mdp'];
		$login=$_POST['login'];
		$categorie=$_POST['categorie'];
		ctlAjouterEmploye($nom, $mdp, $login, $categorie);
	}

	elseif (isset($_POST['deconnexion'])){
		ctlAcceuil();
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