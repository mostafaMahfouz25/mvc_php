<?php 
define("ROOT",dirname(__DIR__).DIRECTORY_SEPARATOR);
define("APP",ROOT.'app'.DIRECTORY_SEPARATOR);
define("CONFIG",APP.'config'.DIRECTORY_SEPARATOR);
define("HELPERS",APP.'helpers'.DIRECTORY_SEPARATOR);
define("CONTROLLERS",APP.'controllers'.DIRECTORY_SEPARATOR);
define("MODELS",APP.'models'.DIRECTORY_SEPARATOR);
define("VIEWS",APP.'views'.DIRECTORY_SEPARATOR);
define("DATA",APP.'data'.DIRECTORY_SEPARATOR);
define("CORE",APP.'core'.DIRECTORY_SEPARATOR);



// get config files  
require_once(CONFIG.'config.php');
require_once(CONFIG.'database.php');


$modules = [ROOT,APP,CORE,VIEWS,CONTROLLERS,CORE,HELPERS,MODELS];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload',false);

// get helpers function  
require_once(HELPERS.'helpers.php');


new App();