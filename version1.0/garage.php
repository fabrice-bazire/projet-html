<?php

require_once('controleur/controleur.php');
//require_once('modele/connect.php');

//try{

	if(isset($_POST['connexion'])){
		$identifiant=$_POST['identifiant'];
		$mdp=$_POST['mdp'];
		ctlIdentification($identifiant, $mdp);
	}


	if (isset($_POST['ajouter'])){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$tel=$_POST['tel'];
		$mail=$_POST['mail'];
		$date=$_POST['date'];
		$montantMax=$_POST['montantMax'];

		ctlAjouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax);
	}else{

	ctlAcceuil();
}

	//}catch(PDOException $e){
	//	CtlErreur();
	//}