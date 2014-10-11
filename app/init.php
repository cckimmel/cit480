<?php

session_start();

set_include_path(get_include_path() . PATH_SEPARATOR . 'google-api-php-client/src');
require_once 'classes/GoogleAuth.php';
?>
