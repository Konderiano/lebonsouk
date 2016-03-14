<?php

### Module de Suivi des affaires ###
//Définition du chemin des views et des accronymes pour ce module

$app['twig.loader.filesystem']->addPath($app['paths']['srcDir']."/Views/","views_suivi");
//Définir un préfixe de route pour ce module
$leBonSouk = $app['controllers_factory'];
$app->mount($app['rootRoute']."/",$leBonSouk);

//Définition des routes subjacente + accronymes de module
$leBonSouk->get('/','Controllers\HomeControllers::indexPage')->bind('suiviIndex'); //Route vers la page d'accueil.

