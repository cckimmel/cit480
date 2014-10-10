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
		</div>
		<div class="body-wrapper">
			<div class="left-menu">
			<?php
				include 'left-menu.php';
			?>
			</div>
			<div class="content-wrapper">
			<?php
					$signin_page= 'http://cit480-2.nerdheroes.com/signin.php';
					$page = $_GET['page'];	
					if (!empty($page)) {
						include($page);
					} 	
				else {
					header ("Location: $signin_page");
				}
?>
			</div>
		</div>
	</body>
</html>