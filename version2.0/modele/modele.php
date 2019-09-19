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


function identification($identifiant, $mdp){
	$connexion=getConnect();
	$req = "SELECT * FROM employe"; 
	$result=$connexion->query($req) ;
	$result->setFetchMode(PDO::FETCH_OBJ);
	while($ligne = $result->fetch()){
		if($ligne->login == $identifiant AND $ligne->mdp == $mdp){
			if($ligne->categorie == "agentAcceuil"){
				afficherEmploye();
			}elseif ($ligne->categorie == "mecanicien"){
				$nomMeca=recupererMeca();
				afficherMecanicien($nomMeca);
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