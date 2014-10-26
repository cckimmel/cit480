<?php
	$username = "cit480_system"; 
    $password = "numFEM8R"; 
    $host = "mysql.nerdheroes.com"; 
    $dbname = "cit480"; 

	$link = mysqli_connect($host, $username, $password, $dbname);
	
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}


