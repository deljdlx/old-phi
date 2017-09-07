<?php


require(__DIR__.'/bootstrap.php');

$router=new \Phi\Routing\Router();

$router->get('index', true, function() {
    echo "hello world";
    return true;
});


$router->route();
