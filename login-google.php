<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
require_once 'Google-API-master/src/Google_Client.php';
require_once 'Google-API-master/src/contrib/Google_Oauth2Service.php';
require_once 'Google-API-master/src/contrib/Google_CalendarService.php';

session_start();

$client = new Google_Client();
$client->setClientId('484495651786-f4sehbvs7di261vdb9lc5faf1ttef4ul.apps.googleusercontent.com');
$client->setClientSecret('aYejOT8pVfpw11MKVQ4JSRUS');
$client->setRedirectUri('http://cit480.nerdheroes.com/index.php');
$client->setDeveloperKey('AIzaSyArG6NDq8DnQAMztcskjkoqxKfANq1cNQs');
$oauth2 = new Google_Oauth2Service($client);
$cal = new Google_CalendarService($client);

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
  return;
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['token']);
  $client->revokeToken();
}

if ($client->getAccessToken()) {
  $user = $oauth2->userinfo->get();

  // These fields are currently filtered through the PHP sanitize filters.
  // See http://www.php.net/manual/en/filter.filters.sanitize.php
  $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
  $img = filter_var($user['picture'], FILTER_VALIDATE_URL);
  $_SESSION['user'] = $email;

  $personMarkup = "<div class='user-email'>$email</div><div class='user-photo'><img src='$img?sz=50'></div>";


  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
?>
<?php if(isset($personMarkup)): ?>
<?php print $personMarkup ?>
<?php endif ?>
<?php
  if(isset($authUrl)) {
    print "<a class='login' href='$authUrl'>Sign in with Google</a>";
  } else {
   print "<a class='logout' href='?logout'>Logout</a>";
  }

