<?php

session_start();

set_include_path( get_include_path() . PATH_SEPARATOR . 'Google-API-master/src/');

require_once 'Google-API-master/src/Google/Client.php';

require_once 'classes/GoogleAuth.php';