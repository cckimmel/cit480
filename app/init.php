<?php

session_start();

set_include_path( get_include_path() . PATH_SEPARATOR . 'google-api/src/');

require_once 'google-api/src/Google/Client.php';

require_once 'classes/GoogleAuth.php';