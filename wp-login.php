<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Palmetto &lsaquo; Log In</title>
	<script type='text/javascript' src='http://christinabranson.github.io/palmetto/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate&amp;ver=4.5.2'></script>
<link rel='stylesheet' href='http://christinabranson.github.io/palmetto/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.5.2' type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-us">
	<div id="login">
		<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Palmetto</a></h1>
	
<form name="loginform" id="loginform" action="http://christinabranson.github.io/palmetto/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="http://christinabranson.github.io/palmetto/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="http://christinabranson.github.io/palmetto/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="http://christinabranson.github.io/palmetto/">&larr; Back to Palmetto</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	