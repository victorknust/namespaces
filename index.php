<?php 
spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

use Project\Model\user;

$usuario = new User;
$usuario->title = 'teste';
$usuario->setTitle();  

?>