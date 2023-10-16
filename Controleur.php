<?php
	require 'Modele.php';

	// Affichage tous les articles du blog
	function accueil() {
		$billets = getBillets();
		$contenu = 'vueAcceuil.php';
		require 'gabarit.php';
	}

	function unBillet($idBillet) {
		$billet = getBillet($idBillet);
		$com =  getCommentaires($idBillet);
		$contenu = 'vueBillet.php';
		require 'gabarit.php';
	}

	function erreur($msgErreur) {
		$contenu = 'vueErreur.php';
		require 'gabarit.php';
	}
