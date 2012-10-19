<?php
define('APP_ROOT', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

define('DEBUGUEANDO', true);
define('ONTHEFLY', false);

require_once(APP_ROOT.DS."cls".DS."Loader.php");

Loader::register();
Loader::addExtension('class', 'php');
Loader::addExtension('class', 'class.php');
Loader::addExtension('class', 'inc.php');
Loader::addExtension('resources', 'php');
Loader::addExtension('resources', 'html');
Loader::addLookupDirectory(APP_ROOT);
Loader::addLookupDirectory(APP_ROOT.DS.'config');
Loader::addLookupDirectory(APP_ROOT.DS.'cls');
Loader::addLookupDirectory(APP_ROOT.DS.'pags');

define('DB_HOST', 'localhost');
define('DB_USER', 'usuario_comun');
define('DB_PASS', 'lEusuComunYeahh');
define('DB_NAME', 'vidiomas');

define('APP_URL_ROOT', "http://localhost/Escribite");
//Debuguie::AddMsg("init", "a ver:".DB_HOST."|".DB_USER."|".DB_PASS."|".DB_NAME, "info");

