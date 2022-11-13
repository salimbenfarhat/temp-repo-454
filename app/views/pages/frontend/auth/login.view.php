<h2>MY SPACE [AUTHENTICATION - LOGIN PAGE]</h2>
<?php
// Loading Menu Block View
require_once(ROOT_DIR.'/app/views/inc/frontend/nav.inc.php');
?>
<section>
	<form action="" method="POST">
		<pre>
			<div id="ID_Field">
				<label for="id">ID(Email Address or Pseudonym) *</label></br>
				<input type="text" name="id" placeholder="hello@johndoe.com OR johndoe" id="id" required="required">
			</div>
			<div id="PIN_Field">
				<label for="pincode">PIN *</label></br>
				<input type="text" name="pincode" placeholder="0000" id="pincode" required="required" minlength="4" maxlength="4">
			</div>
			<input type="submit" name="LoginForm_1" value="Login with a magic link" /></br>
			<input type="submit" name="LoginForm_2" value="Login with password" />
			<p>
				<a href="#" title="Reset your ID">Forgotten ID ?</a>
				<a href="#" title="Reset your PIN Code">Forgotten PIN Code ?</a>
			</p>
			<p>
				Don't have an account yet? <a href="<?= URLROOT . 'auth/signup'; ?>" title="Create a free account">Register for free</a>
			</p>
		</pre>
	</form>
</section>