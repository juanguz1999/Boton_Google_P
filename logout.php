<?php

//Incluye config.php
include('config.php');

//logout.php

//Restablecer token de acceso OAuth
$google_client->revokeToken();

//Destruye toda la información de la sesión.
session_destroy();

//redirecciona la pagina a index.php
header('location:indexV2.php');

?>