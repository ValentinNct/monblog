<?php
<<<<<<< HEAD
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
=======
    require 'Controleur/Controleur.php';

    try{
        if(isset($_GET['action'])){
            if ($_GET['action'] == 'billet') {
                if(isset($_GET['id'])){
                    if(is_numeric($_GET['id'])){
                        $idBillet = $_GET['id'];
                        unBillet($idBillet);
                    }else {
                        //une autre action demandée
                        erreur("Action non numérique");
                    }
                }else {
                    //une autre action demandée
                    erreur("Action non défini");
                }
            }else {
                //une autre action demandée
                erreur("Action non valide");
            }
        }else {
            //pas d'action demandée : affichage par défaut
            accueil();
        }
    }catch (Exception $e){
        erreur($e->getMessage());
    }
?>

>>>>>>> main
