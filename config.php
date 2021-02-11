<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('450926343073-s9kav0dgr0rqb1ls8qkiovm8d6vvutto.apps.googleusercontent.com');

$google_client->setClientSecret('XZn74UhtdJWcDfryokJiJ_gR');

$google_client->setRedirectUri('http://localhost/php_google_login/');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>