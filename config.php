<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('30639041895-0l8at7s382j7gkv9ka4th2vp8tjuk2tl.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/BotonGG/indexV2.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here