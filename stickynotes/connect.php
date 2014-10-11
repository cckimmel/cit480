<?php


/* Database config */

$db_host		= 'mysql.nerdheroes.com';
$db_user		= 'cit480_system';
$db_pass		= 'numFEM8R';
$db_database	= 'cit480';

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>