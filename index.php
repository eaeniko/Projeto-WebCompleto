<?php
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");


     }  
);$app->get(
    '/index',
    function () {

        require_once("view/index.php");


     }  
);

$app->get(
    '/videos',
    function () {

        require_once("view/videos.php");


     }  
);
$app->get(
    '/shop',
    function () {

        require_once("view/shop.php");


     }  
);
$app->get(
    '/constrution',
    function () {

        require_once("view/constrution.php");


     }  
);

$app->run();
