<?php

namespace Gilvan;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;

class Router
{
	public static function controller($path, $controller)
	{
		global $request;
		$routes = new RouteCollection;

		$route = new Route($path, array('controller' => $controller));
		$routes->add($path, $route);

		$context = new RequestContext($request);

		$matcher = new UrlMatcher($routes, $context);

		$parameters = $matcher->match($path);
	}
}