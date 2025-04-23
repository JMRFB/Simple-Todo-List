<?php

// init.php = starter kit

require_once 'php/functions.php';
// spl_autoload_register = It’s a function that registers an autoloader function which PHP 
// will call automatically when you try to use a class that hasn’t been defined yet.
spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT'].'/Todo-List/class/'.$class.'.php';
});

?>