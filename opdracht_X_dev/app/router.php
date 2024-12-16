<?php
//ROUTER
$route = new Route();
// Hier doen we een controle of een bepaalde URL bestaat en we verwijzen door naar een controller of een view

$route->get('', "controllers/home.php");
$route->get('index', "controllers/home.php");
$route->get('about', "views/about.view.php");
$route->get('contact', "views/contact.view.php");
$route->get('posts','controllers/posts.php');
$route->get('posts-show/{id}','controllers/posts-show.php');
$route->get('posts-create', "views/posts-create.view.php");
$route->post('posts-store', "controllers/posts-store.php");
$route->post('posts-destroy/{id}', "controllers/posts-destroy.php");
$route->get('posts-edit/{id}', "controllers/posts-edit.php");
$route->post('posts-update/{id}', "controllers/posts-update.php");

$route->get('login', "views/login.view.php");
$route->post('login', "controllers/login.php");
$route->get('logout', "controllers/logout.php");


//$route->get('items/{id}', 'controllers/items-show.php');
//$route->get('items', 'controllers/items-index.php');
//$route->get('items/create', 'controllers/items-create.php');
//$route->post('items', 'controllers/items-store.php');
//$route->get('items/{id}/edit', 'controllers/items-edit.php');
//$route->put('items/{id}', 'controllers/items-update.php');
//$route->delete('items/{id}', 'controllers/items-destroy.php');
//Alleen als je ingelogd bent
if (auth()) {

    //hier komen routes die je alleen kan bereiken als je ingelogd bent
    $route->get('profielfoto', 'views/profielfoto.view.php');
    $route->post('profielfoto','controllers/profielfoto-store.php');
}

//alleen toegankelijk als administrator
if (hasRole('admin')) {
    //hier komen de routes die alleen toegankelijk zijn voor een admin

}


//pagina niet gevonden
abort(404);