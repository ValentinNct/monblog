<?php
	foreach ($billets as $billet):
?>
<article>
	<header>
		<h1> class="tritreBillet"><?=$billet['titre'] ?></h1>
		<time><?= $billet['date'] ?></time>
	</hearde>
	<p><?= $billet['contenu'] ?></p>
	<em><a href="#">Commentaire</a></em>
</article>
<hr />
<?php endforeach;
