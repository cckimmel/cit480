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
<?php
  $authUrl = $auth->createAuthUrl();
  print "<a class='login' href='$authUrl'>Connect Me!</a>";
  ?>
	</body>
</html>