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
			}
		}else{
			echo "2";
		}
	}
}