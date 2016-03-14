<?php
namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;


class HomeControllers
{
	/**
	*Page d'accueil du site
	*@return un template twig qui correspond à la page d'accueil
	**/
	function indexPage(Application $app)
	{
		echo "Salut, cela fonctionne :)";
		return $app['twig']->render('@views_suivi/layout.html.twig', array('cache' => false,
			'auto_reload' => true
		));
	}
}

?>