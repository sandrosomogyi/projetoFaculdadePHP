<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');
ini_set('default_charset', 'utf-8');

define('BASE_DIR', __DIR__);
define('DIR_VIEWS', BASE_DIR . '/views');
define('DIR_API', BASE_DIR . '/api');

define('NOME', 'Sistema Biomedicina');
define('BASE_URL', 'http://localhost/SP');
define('URL_SITE', BASE_URL);
define('URL_VIEWS', BASE_URL . '/views');
define('URL_ASSETS', BASE_URL . '/views/assets');

include(DIR_API . '/views_api.php');
include(DIR_API . '/database_api.php');

getConnection();