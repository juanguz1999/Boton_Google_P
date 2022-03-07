<?php

//iniciar sesión en la página web
session_start();

//config.php

//Incluir la biblioteca de clientes de Google para el archivo de carga automática de PHP
require_once 'vendor/autoload.php';

//Hacer objeto de Google API Client para llamar a Google API
$google_client = new Google_Client();

//Establecer el ID de cliente de OAuth 2.0
$google_client->setClientId('30639041895-0l8at7s382j7gkv9ka4th2vp8tjuk2tl.apps.googleusercontent.com');

//Establecer la clave secreta del cliente de OAuth 2.0
$google_client->setClientSecret('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');

//Establecer el URI de redirección de OAuth 2.0
$google_client->setRedirectUri('http://localhost/Boton_Google_P/index.php');

//para obtener el correo electrónico
$google_client->addScope('email');

//para obtener el perfil
$google_client->addScope('profile');

?>