<?php
//ROUTER
$route = new Route();
// Hier doen we een controle of een bepaalde URL bestaat en we verwijzen door naar een controller of een view

$route->get('', "controllers/home.php");
$route->get('index', "controllers/home.php");
$route->get('about', "views/about.view.php");

$route->get('login', "views/login.view.php");
$route->post('login', "controllers/login.php");
$route->get('logout', "controllers/logout.php");


$route->get('items/{id}', 'controllers/items-show.php');
$route->get('items', 'controllers/items.php');
$route->get('items-create', 'controllers/items-create.php');
$route->post('items-store', 'controllers/items-store.php');
$route->get('items-edit/{id}', 'controllers/items-edit.php');
$route->post('items-update/{id}', 'controllers/items-update.php');
$route->post('items-destroy/{id}', 'controllers/items-destroy.php');

//Alleen als je ingelogd bent
if (auth()) {
    //hier komen routes die je alleen kan bereiken als je ingelogd bent
    //$route->get('profile','controllers/profile.php');
}


//alleen toegankelijk als administrator
if (hasRole('admin')) {
    //hier komen de routes die alleen toegankelijk zijn voor een admin

}


http_response_code(404);
view("404", ['error' => $_SERVER['REQUEST_URI'] . " niet gevonden"]);
die();