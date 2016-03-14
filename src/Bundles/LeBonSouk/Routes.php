<?php

### Module de Suivi des affaires ###
//Définition du chemin des views et des accronymes pour ce module

$app['twig.loader.filesystem']->addPath($app['paths']['srcDir']."/Bundles/LeBonSouk/Views/","views_suivi");
//Définir un préfixe de route pour ce module
$leBonSouk = $app['controllers_factory'];
$app->mount("$app[rootRoute]/LeBonSouk/",$leBonSouk);

//Définition des routes subjacente + accronymes de module
$leBonSouk->get('/','Bundles\LeBonSouk\Controllers\HomeControllers::indexPage')->bind('suiviIndex'); //Route vers la page d'accueil où l'on affiche le calendrier.
