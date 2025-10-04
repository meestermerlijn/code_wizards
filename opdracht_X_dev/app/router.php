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

$route->get('posts', "controllers/posts.php");

//Alleen als je ingelogd bent
if (auth()) {
    $route->get('profielfoto-create', 'views/profielfoto-create.view.php');
    $route->post('profielfoto-store','controllers/profielfoto-store.php');
}


//alleen toegankelijk als administrator
if (hasRole('admin')) {
    //hier komen de routes die alleen toegankelijk zijn voor een admin
    $route->get('api/users', "controllers/api/users.php");
    $route->get('users', "views/users.view.php");
}

//pagina niet gevonden
abort(404);