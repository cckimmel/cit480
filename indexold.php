<?php // index.php
require_once 'openid.php';
$openid = new LightOpenID("cit480.nerdheroes.com");

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://cit480.nerdheroes.com/login.php'
?>

<head>
<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<div class="body-wrapper">
This is a test of the body wrapper. < br/>
<a href="<?php echo $openid->authUrl() ?>">Login with Google</a> < br/>

</div>
<div class="footer-wrapper">
This is a test of the footer wrapper.
</div>
</body>