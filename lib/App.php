<?php

/**
 * Starts all the applications
 * @author Luiz Gabriel
 */

namespace Gilvan;

use Gilvan\Router;

class App
{
	public function __construct() { }

	public function run()
	{
		global $request;
		global $reponse;

		/**
		 * Adds All Routes
		 */
		include "app/routes.php";

		try {

			$params = Router::match();

			return Router::response($params)->send();

		} catch(ResourceNotFoundException $e){

			throw new ResourceNotFoundException($e->getMessage(), 1);

		}

	}
}