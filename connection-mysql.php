<?php
	$username = "cit480_system"; 
    $password = "numFEM8R"; 
    $host = "mysql.nerdheroes.com"; 
    $dbname = "cit480"; 

	$link = mysql_connect($host, $username, $password);
	
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
