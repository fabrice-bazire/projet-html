<?php

function getConnect(){
	require_once('connect.php');
	$connexion=new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
	$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$connexion->query('SET NAMES UTF8');
	return $connexion;
}

function ajouterClient($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax){
	$connexion=getConnect();
	$requete="INSERT INTO client VALUES(0, '$nom', '$prenom', '$adresse', '$tel', '$mail', '$date', '$montantMax')";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function ajouterEmploye($nom, $mdp, $login, $categorie){
	$connexion=getConnect();
	$requete="INSERT INTO employe VALUES('$nom', '$login', '$mdp', '$categorie')";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function validerFormation($dateFormation, $heureFormation, $nomDuMecanicienPourForm){
	$connexion=getConnect();
	$requete="INSERT INTO formation VALUES(0, '$dateFormation', '$heureFormation', '$nomDuMecanicienPourForm')";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function ajouterInter($nomInter, $montantInter, $piecesAFournir){
	$connexion=getConnect();
	$requete="INSERT INTO typeintervention VALUES('$nomInter', '$montantInter', '$piecesAFournir')";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

/*function modifier($nom, $prenom, $adresse, $tel, $mail, $date, $montantMax, $id){
	$connexion=getConnect();
	$requete="UPDATE client SET nom='$nom', prenom='$prenom', adresse='$adresse', numTel='$tel', mail='$mail', dateNaissance='$date', montantMax='$montantMax' WHERE idClient='$id'";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}*/

function modifierNom($id, $nom){
	$connexion=getConnect();
	$requete="UPDATE client SET nom='$nom' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierPrenom($id, $prenom){
	$connexion=getConnect();
	$requete="UPDATE client SET prenom='$prenom' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierAdresse($id, $adresse){
	$connexion=getConnect();
	$requete="UPDATE client SET adresse='$adresse' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierTel($id, $tel){
	$connexion=getConnect();
	$requete="UPDATE client SET numTel='$tel' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierMail($id, $mail){
	$connexion=getConnect();
	$requete="UPDATE client SET mail='$mail' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierDate($id, $date){
	$connexion=getConnect();
	$requete="UPDATE client SET dateNaissance='$date' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierMontantMax($id, $montantMax){
	$connexion=getConnect();
	$requete="UPDATE client SET montantMax='$montantMax' WHERE idClient='$id' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierMdp($nom, $mdp){
	$connexion=getConnect();
	$requete="UPDATE employe SET mdp='$mdp' WHERE nomEmploye='$nom' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierLogin($nom, $login){
	$connexion=getConnect();
	$requete="UPDATE employe SET login='$login' WHERE nomEmploye='$nom' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierCategorie($nom, $categorie){
	$connexion=getConnect();
	$requete="UPDATE employe SET categorie='$categorie' WHERE nomEmploye='$nom' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function chercherTousLesEmploye(){
	$connexion=getConnect();
	$requete="select * from employe order by categorie" ;
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$tousLesClients=$resultat->fetchall();
	$resultat->closeCursor();
	return $tousLesEmploye;
}

function supprimerEmploye($nom){
	$connexion=getConnect();
	$requete="DELETE FROM employe WHERE nomEmploye='$nom' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function supprimerIntervention($nomInter){
	$connexion=getConnect();
	$requete="DELETE FROM typeintervention WHERE nomTypeInter='$nomInter' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierMontantInter($nomInter, $montantInter){
	$connexion=getConnect();
	$requete="UPDATE typeintervention SET montant='$montantInter' WHERE nomTypeInter='$nomInter' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function modifierPiecesAFournir($nomInter, $piecesAFournir){
	$connexion=getConnect();
	$requete="UPDATE typeintervention SET pieces='$piecesAFournir' WHERE nomTypeInter='$nomInter' ";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}


function identification($identifiant, $mdp){
	$connexion=getConnect();
	$req = "SELECT * FROM employe"; 
	$result=$connexion->query($req) ;
	$result->setFetchMode(PDO::FETCH_OBJ);
	while($ligne = $result->fetch()){
		if($ligne->login == $identifiant AND $ligne->mdp == $mdp){
			if($ligne->categorie == "agentAcceuil"){
				$nomMeca=recupererMeca();
				afficherEmploye($nomMeca);
			}elseif ($ligne->categorie == "mecanicien"){
				$nomMeca=recupererMeca();
				afficherMecanicien($nomMeca);
			}elseif ($ligne->categorie == "directeur"){
				afficherDirecteur();
			}
		}
	}
}

function chercherClient($nom, $date){
	$connexion=getConnect();
	$requete="select * from client where nom='$nom' AND dateNaissance='$date'";
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$nomClient=$resultat->fetchall();
	$resultat->closeCursor();
	return $nomClient;
}

function chercherTousLesClients(){
	$connexion=getConnect();
	$requete="select * from client" ;
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$tousLesClients=$resultat->fetchall();
	$resultat->closeCursor();
	return $tousLesClients;
}

function recupererMeca(){
	$connexion=getConnect();
	$requete="select * from employe where categorie='mecanicien'";
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$nomMeca=$resultat->fetchall();
	$resultat->closeCursor();
	return $nomMeca;
}

function recupererInter(){
	$connexion=getConnect();
	$requete="select * from typeintervention";
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$listeInter=$resultat->fetchall();
	$resultat->closeCursor();
	return $listeInter;
}

function synthese($idClient){
	$connexion=getConnect();
	$requete="SELECT * FROM intervention WHERE idClient='$idClient' ";
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$synthese=$resultat->fetchall();
	$resultat->closeCursor();
	return $synthese;
}

function trouverClient($idClient){
	$connexion=getConnect();
	$requete="SELECT * FROM client WHERE idClient='$idClient' ";
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$client=$resultat->fetchall();
	$resultat->closeCursor();
	return $client;
}

/*function payer($code){
	$connexion=getConnect();
	$requete="UPDATE intervetion SET etat='payé' WHERE code='$code'";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}*/

function enregistrerRdv($nomDuMecanicien, $dateInter, $heureInter, $typeInter, $idClient){
	$etat = 'en attente';
	$connexion=getConnect();
	$requete="INSERT INTO intervention VALUES(0,'$dateInter', '$heureInter', '$nomDuMecanicien', '$idClient', '$etat', '$typeInter')";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function afficherPieces ($typeInter){
	$connexion=getConnect();
	$requete ="SELECT * FROM typeintervention";
	$resultat=$connexion->query($requete) ;
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	while($ligne = $resultat->fetch()){
		if ($ligne->nomTypeInter == $typeInter){
			echo "$ligne->pieces";
		}
	}
	$resultat->closeCursor();
}

function payer($code){
	$connexion=getConnect();
	$requete="UPDATE intervention SET etat='payé' WHERE code = '$code'";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function payerEnDiffere($code){
	$connexion=getConnect();
	$requete="UPDATE intervention SET etat='paiement differe' WHERE code = $code";
	$resultat=$connexion->query($requete);
	$resultat->closeCursor();
}

function verifDifferePossible ($code){
	$connexion=getConnect();
	$requete="SELECT montantMax FROM intervention NATURAL JOIN client WHERE code=$code";
	$resultat=$connexion->query($requete);
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$decouvertmax=$resultat->fetch();
	$resultat->closeCursor();
	
	$requete = "SELECT montant FROM intervention NATURAL JOIN typeintervention WHERE code = $code";
	$res=$connexion->query($requete);
	$res->setFetchMode(PDO::FETCH_OBJ);
	$tarif=$res->fetch();
	$res->closeCursor();

	$a = $decouvertmax->montantMax;
	$b = $tarif->montant;
	$res = $a - $b;

	if ($res>0){
		return TRUE;
	}else{
		return FALSE;
	}
}