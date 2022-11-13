<h2>HOME PAGE</h2>
<?php
// Loading Menu Block View
require_once(ROOT_DIR.'/app/views/inc/frontend/nav.inc.php');
?>
<section>
	<img width="600" src="<?= 'public/assets/img/banner.png'; ?>" alt="">
	<h1>Database Connection TEST</h1>
	<?php 
	switch(FrontendController::globalVars()['db']::callInstance()->getStatus()) {
	    case 'connected' :
			echo "<pre style='color:green;'>CONNECTION : <b>OK</b></pre>";
	        break;
	    case 'not connected' :
			echo "<pre style='color:red;'>CONNECTION : <b>KO</b> => " . FrontendController::globalVars()['db']::callInstance()->getMessage() . "</pre>";
	        break;
	}
	?>
	<blockquote> 
		<?php 
		$status = FrontendController::globalVars()['db']::callInstance()->getStatus();
		$status_alert = $status == "connected" ? "green" : "red";
		?>
		<button>Status : <b style="color:<?= $status_alert; ?>;"><?= $status; ?></b></button>
	</blockquote>
	<p>Welcome <b><?= $variables['data']['fk_name']; ?></b> !</p>
	<hr>
	<h3><?= $variables['data']['msg_info']; ?></h3>
	<hr>
	<label for="RANDOM_CHARS_NUMERICAL">NUMERICAL</label>
	<input type="text" name="RANDOM_CHARS_NUMERICAL" value="<?= $variables['data']['random_num']; ?>" disabled>
	<label for="RANDOM_CHARS_ALPHABETICAL">ALPHABETICAL</label>
	<input type="text" name="RANDOM_CHARS_ALPHABETICAL" value="<?= $variables['data']['random_alpha']; ?>" disabled>
	<label for="RANDOM_CHARS_APLPHANUMERICAL">ALPHANUMERICAL</label>
	<input type="text" name="RANDOM_CHARS_APLPHANUMERICAL" value="<?= $variables['data']['random_alphanum']; ?>" disabled>
	<label for="RANDOM_CHARS_FULL">FULL</label>
	<input type="text" name="RANDOM_CHARS_FULL" value="<?= $variables['data']['random_full']; ?>" disabled>
</section>	