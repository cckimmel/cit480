<?php

require_once 'app/init.php';

$googleClient = new Google_Client;

$auth = new GoogleAuth($googleClient);


?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test Signin</title>
	</head>
	<body>
	Text
		<?php if(!$auth->isLoggedIn()): ?>

		<a href="<?php echo $auth->getAuthUrl(); ?>">Sign in with Google</a>

		<?php else: ?>
			<a href="<?php echo $auth->getAuthUrl(); ?>">Sign in with Google2</a>

		<?php endif; ?>
	</body>
</html>