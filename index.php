<?php
	require_once 'connection-mysql.php';?>

<!DOCTYPE html>
<html>
	<head>
		<title>House M.G.R.</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="stickynotes/styles.css" />
		<link rel="stylesheet" type="text/css" href="stickynotes/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="stickynotes/fancybox/jquery.fancybox-1.2.6.pack.js"></script>
		<script type="text/javascript" src="stickynotes/script.js"></script>
	</head>
	<body>
		<div class="headerbar">
			<div class="logo">
				<img src="../images/logo.png">
			</div>
			<div class="sign-in">
			<?php
			include('login-google.php');
			?>
			</div>
		</div>
		<div class="body-wrapper">
			<div class="left-menu">
			<?php
				include 'left-menu.php';
			?>
			</div>
			<div class="content-wrapper">
			<?php
					$page = $_GET['page'];	
					if (!empty($page)) {
						include($page);
					} 	
				else {
					include('about-us.php');
					
				}
			?>
			</div>
		</div>
	</body>
</html>
