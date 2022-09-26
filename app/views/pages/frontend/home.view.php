<?= "HOME PAGE"; ?>

<section>
	<h1>Test Connexion à la BDD</h1>
	<?php 
	
	switch(FrontendController::globalVars()['db']::callInstance()->getStatus()) {
	    case 'connecté' :
			echo "CONNECTER";
	        break;
	    case 'non connecté' :
			echo "NON CONNECTER : " . FrontendController::globalVars()['db']::callInstance()->getMessage();
	        break;
	}
	?>
	<blockquote>
		<button>Statut : <b class="<?= $class; ?>"><?= FrontendController::globalVars()['db']::callInstance()->getStatus(); ?></b></button>
	</blockquote>
	<blockquote>
	</blockquote>	
</section>	