<article>                                                                                                                                                                                                                                                                                                                                                                                           <article>
	<header>
		<h1 class="titreBillet"><?=$billet['titreBillet'] ?></h1>
		<time><?= $billet['dateBillet'] ?></time>
	</hearder>
	<p><?= $billet['contenuBillet'] ?></p>
	<?php foreach ($com as $commentaire){
		echo "<p>".$commentaire['auteurCommentaire']." a dit : </p>";
		echo "<p>".$commentaire['contenuCommentaire']." </p>";
		}
	?>
</article>
<hr />
