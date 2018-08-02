<?php
require "../vendor/autoload.php";
require "helpers.php";
use Pecee\SimpleRouter\SimpleRouter;


$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

SimpleRouter::post('api/signin', function() {
    $controller= new \App\SignInUserController();
    $controller->signin();
});
SimpleRouter::post('api/signout', function() {
    $controller= new \App\SignOutUserController();
    $controller->signout();
});


SimpleRouter::get('/', function() {
    return file_get_contents('welcome.html');
});

SimpleRouter::get('/signin', function() {
    return file_get_contents('signin.html');
});

SimpleRouter::get('/signout', function() {
    return file_get_contents('signout.html');
});

SimpleRouter::get('/api/users', function() {
    return new \App\ReturnVisitorsController();
});


SimpleRouter::start();

