<?php
	function getBdD(){
		$bdd = new PDO('mysql:host=local;dbname=monblog;charset=utf8','root','',
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $bdd;
	}

	function getBillets(){
		$bdd = new PDO('mysql:host=local;dbname=monblog;charset=utf8','root','');
		$billets = $bdd->query('select idBillet as id, dateBillet as date,'
					.'titreBillet as titre, contenuBillet as contenu from BILLET'
					.'order by idBillet desc');
		require $billets;
	}
