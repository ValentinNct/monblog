<?php
	require 'Controleur.php';
	try {
		if (isset($_GET['action'])) {
			//echo $_GET
			if($_GET['action'] == 'billet'){
			$idBillet = $_GET['id'];
			unBillet($idBillet);
			}
			else {
				// une autre action demandée
				erreur("Action non validée");
			}
		}
		else {
		// pas d'action demandée : affichage par défaut
		accueil();
		}
	} catch (Exception $e) {
		$msgErreur = $e->getMessage();
	}
