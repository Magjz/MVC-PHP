<?php 
define ('DS', DIRECTORY_SEPARATOR);
define ('ROOT',dirname(dirname(dirname(__FILE__))));
define ('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define ('APP', ROOT.DS.'App');
define ('CONTROLLER', APP.DS."Controllers");
define ('CONFIG', APP.DS.'Config');
define ('SRC', APP.DS."Src");
define ('CORE', APP.DS."Core");
define ('VIEWS', APP.DS."Views");

require_once(ROOT.DS.'autoload.php');

$dispatcher = new App\Core\Dispatcher;
$dispatcher->dispatch();
