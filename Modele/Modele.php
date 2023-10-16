<?php
	function getBdD(){
		$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','utilblog','1234',
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $bdd;
	}

	function getBillets(){
		$bdd = getBdD();
		$billets = $bdd->query('select idBillet as id, dateBillet as date,'
                        	. ' titreBillet as titre, contenuBillet as contenu from BILLET'
                	        . ' order by idBillet desc');
		return $billets;
	}

	function getBillet($idBillet){
		$bdd = getBdD();
		$billet = $bdd->prepare('select * from billet WHERE idBillet=:id');
		$billet->bindParam(':id', $idBillet);
		$billet->execute();
		return $billet->fetch(PDO::FETCH_ASSOC);
	}

	function getCommentaires($idBillet){
		$bdd = getBdD();
		$com = $bdd->query('select * from commentaire where idBillet='. $idBillet);
		return $com;
	}

