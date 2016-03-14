<?php
namespace Bundles\SuiviAffaires\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

use Bundles\SuiviAffaires\Models\AffaireQueries;
use Bundles\SuiviAffaires\Models\EvenementQueries;
use Bundles\SuiviAffaires\Models\CommentaireQueries;

use Bundles\SuiviAffaires\Models\Affaire;

class HomeControllers
{
	/**
	*Page d'accueil du site
	*@return un template twig qui correspond à la page d'accueil
	**/
	function indexPage(Application $app)
	{

		return $app['twig']->render('@views_suivi/layout.html.twig', array('cache' => false,
			'auto_reload' => true,
			'dataJSON' => $json
			));
	}


}