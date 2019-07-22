<?php

require 'vendor/autoload.php';
require 'Sql.php';
require 'Usuario.php';
$app = new \Slim\Slim();

$app->get("/", function(){
    echo "Home Page";
});
$app->get("/admin/lista", function(){
    $sql = Usuario::getList();
    print_r($sql);
    
});
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();
