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

$route->get('afspraak-create', "controllers/afspraak-create.php"); //(1p)
$route->post('afspraak-store', "controllers/afspraak-store.php");  //(1p)

$route->get('afspraken', "controllers/afspraken.php"); //(1p)
$route->post('afspraak-destroy/{id}', "controllers/afspraak-destroy.php");  //(1p)

$route->get('klanten', "controllers/klanten.php"); //(1p)

$route->get('klanten-edit/{id}', "controllers/klanten-edit.php"); //(1p)
$route->post('klanten-update/{id}', "controllers/klanten-update.php");  //(1p)
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