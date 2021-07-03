<?php
    require 'vendor/autoload.php';

    require_once('config/config.php');


    require_once('nucms/RequestHandler.php');
    require_once('nucms/PageRenderer.php');

    $cms = new RequestHandler('b7fcc4140534288dbdbd8cc3d5adb0');

    $templates = new League\Plates\Engine('templates');

    global $templates;

    $router = new \Bramus\Router\Router();

    $router->get('/', function() use ($templates) {


        echo $templates->render('main', ['title' => 'That was offensive 3', 'description' => 'That was descriptive 3']);
    });

    $router->run();
?>