<h2>MY SPACE [AUTHENTICATION - SIGNUP PAGE]</h2>
<?php
// Loading Menu Block View
require_once(ROOT_DIR.'/app/views/inc/frontend/nav.inc.php');
//$pwd = FrontendController::globalVars()['generate']::random(4, "numerical"); 
?>
<section>
	<form action="" method="POST">
		<pre>
			<div id="EMAIL_Field">
				<label for="email">Email Address *</label></br>
				<input type="email" name="email" placeholder="hello@johndoe.com" id="email" required="required">
			</div>
			<p id="pepouze"></p>
			<div id="PIN_Field">
				<label for="pincode">PIN *</label></br>
				<input type="text" pattern="[0-9]{4}" aria-label="4-digit number" size="1" name="pincode" placeholder="<?= $variables['data']['random_num']; ?>" id="pincode" required="required" minlength="4" maxlength="4" value="<?= $variables['data']['random_num']; ?>">
				<a href="javascript:;" onclick="callDOM('pincode', random(4, 'numerical'))" alt="">Generate PIN Code</a>
				<button type="button" onclick="callDOM('pincode', random(4, 'numerical'))">Generate PIN Code</button>
			</div>
			<input type="submit" name="SignupForm_Btn1" value="Signup with a magic link" /></br>
			<input type="submit" name="SignupForm_Btn2" value="Signup with password" />
			<p>By signing up for <b>SBFramework</b>, you agree to our Terms of Services and Privacy Statement.</p>
			<p>
				Already have an account ? <a href="<?= URLROOT . 'auth/login'; ?>" title="Sign in to your account">Log In</a>
			</p>
		</pre>
	</form>
</section>
