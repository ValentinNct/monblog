<form action="" method="post">
<article>                                                                                                                                                                                                                                                                                                                                                                                           <article>
	<header>
		<h1><u>Ajoutez un Commentaire</u></h1>
	</hearder>
	<h4><u> Nom :</u></h4>
    <input type:"text" id="auteurCom" name="auteurCom" required>
    <h4><u> Commentaire :</u></h4>
    <textarea type:"text" id="contenuCom" name="contenuCom" required></textarea>
    <br>
    <input type="submit"  value="Envoyez"/>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if (isset($_POST['auteurCom']) && isset($_POST['contenuCom'])){
                //echo 'réussi';
                $_SESSION['auteurCom']=$_POST['auteurCom'];
                $_SESSION['contenuCom']=$_POST['contenuCom'];
                ajoutCommentaire();
            }else {
                echo "C'est vide";
            }
    }          
    ?>

</article>
<hr />
</form>