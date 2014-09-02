<?php

/**
 * Starts all the applications
 * @author Luiz Gabriel
 */

namespace Gilvan;

class Bootstrap
{
	public function __construct() { }

	public function run()
	{
		global $request;
		global $reponse;

		include "app/routes.php";

		/*$path = $request->getPathInfo();
		if (isset($map[$path])) {
		    require $map[$path];
		} else {
		    $response->setStatusCode(404);
		    $response->setContent('Not Found');
		}
		 
		$response->send();*/

	}
}