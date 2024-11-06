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


$route->get('login', "views/login.view.php");
$route->post('login', "controllers/login.php");
$route->get('logout', "controllers/logout.php");


//Alleen als je ingelogd bent
if (auth()) {
    //hier komen routes die je alleen kan bereiken als je ingelogd bent
    //$route->get('profile','controllers/profile.php');
}


//alleen toegankelijk als administrator
if (hasRole('admin')) {
    //hier komen de routes die alleen toegankelijk zijn voor een admin

}


//pagina niet gevonden
abort(404);