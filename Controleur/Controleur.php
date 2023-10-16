<?php
	require 'Modele/Modele.php';

	// Affichage tous les articles du blog
	function accueil() {
		$billets = getBillets();
		$contenu = 'Vue/vueAcceuil.php';
		require 'Vue/gabarit.php';
	}

	function unBillet($idBillet) {
		$billet = getBillet($idBillet);
		$com =  getCommentaires($idBillet);
		$contenu = 'Vue/vueBillet.php';
		require 'Vue/gabarit.php';
	}

	function erreur($msgErreur) {
		$contenu = 'Vue/vueErreur.php';
		require 'Vue/gabarit.php';
	}
