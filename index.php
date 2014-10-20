<?php
	require_once 'connection-mysql.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>House M.G.R.</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
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
