<?php
	foreach ($billets as $billet):
?>
<article>
	<header>
		<h1 class="titreBillet"><?=$billet['titre'] ?></h1>
		<time><?= $billet['date'] ?></time>
	</hearder>
	<p><?= $billet['contenu'] ?></p>
	<em><a href="billet.php?id=<?= $billet['id'] ?>"> Commentaires</a></em>
</article>
<hr />
<?php endforeach;
